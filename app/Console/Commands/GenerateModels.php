<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use PDO;
use Symfony\Component\Console\Output\BufferedOutput;

/**
 * This command uses configurations in config/models to choose how models will be generated.
 * Run command below to regenerate
 * php artisan vendor:publish --tag=reliese-models
 */
class GenerateModels extends Command
{
    protected $signature = 'model:generate {--t|table= : The name of the table}';
    protected $description = 'Generate Models from migrations to a fakedb. Make sure user can create database';
    protected ?string $dbName = null;
    protected ?string $dbConnection = null;
    protected ?PDO $pdo = null;

    public function handle(): void
    {
        $this->dbName = 'fake_database';
        $this->dbConnection = config('database.default');

        // Create the database
        $this->createDatabase();
        // Run migrations
        $this->generateModels();
        //add validators to models
        $this->addValidators();
        //drop db
        $this->dropDatabase();
    }

    protected function createDatabase(): void
    {
        $this->info('Creating Fake Database...');
        if ($this->dbConnection === 'sqlite'){
            $this->dbName = database_path($this->dbName.".sqlite");
            file_put_contents($this->dbName, "");
        }else {
            $host = config('database.connections.'.$this->dbConnection.'.host');
            $port = config('database.connections.'.$this->dbConnection.'.port');
            $username = config('database.connections.'.$this->dbConnection.'.username');
            $password = config('database.connections.'.$this->dbConnection.'.password');
            $driver = config('database.connections.'.$this->dbConnection.'.driver');

            $dsn = "$driver:host=$host;port=$port";
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $sql = "DROP DATABASE IF EXISTS $this->dbName";
            $this->pdo->exec($sql);
            $sql = "CREATE DATABASE $this->dbName";
            $this->pdo->exec($sql);

        }
        config(['database.connections.' . config('database.default') . '.database' => $this->dbName]);
        $this->info('Fake Database created successfully!.');
    }

    protected function dropDatabase(): void
    {
        if ($this->dbConnection === 'sqlite'){
            unlink($this->dbName);
        }
        else {
            if ($this->dbConnection === 'pgsql'){
                $this->pdo->exec("SELECT pg_terminate_backend(pg_stat_activity.pid) FROM pg_stat_activity WHERE pg_stat_activity.datname = '$this->dbName' AND pid <> pg_backend_pid();");
            }
            $sql = "DROP DATABASE IF EXISTS $this->dbName";
            $this->pdo->exec($sql);
            $this->pdo = null;
        }
        $this->info('Fake Database dropped successfully!.');
    }

    protected function generateModels(): void
    {
        $this->call("config:clear");
        $this->call('migrate', ['--force' => true]);
        $generatedModelsPath = config('models.*.path');
        if (!file_exists($generatedModelsPath)) {
            // Create the directory and any necessary parent directories
            mkdir($generatedModelsPath, 0777, true);
        }
        $table = $this->option('table');
        if ($table) {
            $this->call('code:models', ['--table' => $table]);
        }else{
            $this->call('code:models');
        }
        $this->removeComments();
    }

    protected function removeComments(): void
    {
        $directory = config('models.*.path');

        if ($handle = opendir($directory)) {
            while (false !== ($file = readdir($handle))) {
                // Skip '.' and '..'
                if ($file != '.' && $file != '..') {
                    $filePath = $directory . '/' . $file;

                    // Read the file content
                    $content = file_get_contents($filePath);

                    // Replace 'teacher' with an empty string
                    $updatedContent = str_replace('Created by Reliese Model', 'DB generated Model', $content);

                    // Write the updated content back to the file
                    file_put_contents($filePath, $updatedContent);
                }
            }
            closedir($handle);
        }
    }

    /**
     * This function uses configurations in config/schema-rules to choose how validators will be generated.
     * Run command below to regenerate
     * php artisan vendor:publish --tag="schema-rules-config"
     */
    protected function addValidators(): void
    {
        $indent_with_space = config('models.*.indent_with_space');
        $spacer = "\t";
        if ($indent_with_space > 0){
            $spacer = "";
            for ($i = 1; $i <= $indent_with_space; $i++) {
                $spacer .= " ";
            }
        }

        $directory = config('models.*.path');

        if ($handle = opendir($directory)) {
            while (false !== ($file = readdir($handle))) {
                // Skip '.' and '..'
                if ($file != '.' && $file != '..') {
                    $filePath = $directory . '/' . $file;

                    // Read the file content
                    $content = file_get_contents($filePath);
                    if (str_contains($content, 'validators')){
                        continue;
                    }

                    // Use regular expressions to extract the table name and fillable array elements
                    preg_match('/protected \$table = \'([^\']+)\';/', $content, $matches);
                    $table = $matches[1];
                    print("Generating validators for $table\n");

                    preg_match('/protected \$fillable = \[([^]]+)];/', $content, $matches);
                    if (count($matches) < 2) continue;
                    $matchedStr = $matches[1];
                    $fillableArray = explode(',', str_replace(['"', "'", ' '], '', $matchedStr));

                    $columns = "";
                    foreach ($fillableArray as $fillable){
                        $columns .= trim($fillable) .",";
                    }
                    $columns = rtrim($columns, ",");
                    $output = new BufferedOutput();
                    Artisan::call("schema:generate-rules", ['table'=>$table, '--columns'=>$columns], $output);
                    $outputText = $output->fetch();
                    $lines = explode("\n", $outputText);
                    array_splice($lines, 0, 2);

                    $validatorStr = "";

                    foreach ($lines as $line) {
                        $newLine = trim($line);
                        if (strlen($newLine) > 0){
                            if (str_starts_with($newLine, '[')){
                                $validatorStr .= $spacer . "const array validators = " .$newLine ."\n";
                            }else if (str_starts_with($newLine, ']')){
                                $validatorStr .= $spacer . $newLine .";\n";
                            }else {
                                $validatorStr .= $spacer . $spacer . $newLine . "\n";
                            }
                        }
                    }

                    $updateValidatorStr = rtrim($this->getUpdateValidators($validatorStr), "\n");

                    // Find the position of the fillable array and the closing bracket
                    $fillableArrayStart = strpos($content, 'protected $fillable = [');
                    $fillableArrayEnd = strpos($content, ';', $fillableArrayStart);

                    // Replace the contents of the array with the word "Here"
                    $newContents = substr_replace($content, '; '. "\n\n" . $validatorStr . "\n" . $updateValidatorStr, $fillableArrayEnd,1 );

                    // Write the updated content back to the file
                    file_put_contents($filePath, $newContents);
                }
            }
            closedir($handle);
        }
    }

    protected function getUpdateValidators($string): string {
        // Regular expression to match both forms of "('required', )" and "('required')"
        $pattern = '/\'required\', |\'required\'/';

        // Replace the matched strings with an empty space
        $replacedString = preg_replace($pattern, '', $string);

        return str_replace('validators', 'updateValidators', $replacedString);
    }
}
