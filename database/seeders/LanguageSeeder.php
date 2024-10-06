<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = ['Afrikaans', 'Albanian', 'Amharic', 'Arabic', 'Aramaic', 'Armenian', 'Aymara', 'Azerbaijani', 'Basque', 'Belarusian', 'Belizean Creole', 'Bengali', 'Berber', 'Bislama', 'Bosnian', 'Bulgarian', 'Burmese', 'Carolinian', 'Catalan', 'Chamorro', 'Chewa', 'Chibarwe', 'Chinese', 'Comorian', 'Cook Islands Māori', 'Croatian', 'Czech', 'Danish', 'Dari', 'Dutch', 'Dzongkha', 'English', 'Estonian', 'Faroese', 'Fiji Hindi', 'Fijian', 'Filipino', 'Finnish', 'French', 'Galician', 'Georgian', 'German', 'German', 'Gilbertese', 'Greek', 'Greenlandic', 'Guaraní', 'Guernésiais', 'Haitian Creole', 'Hassaniya', 'Hebrew', 'Herero', 'Hindi', 'Hiri Motu', 'Hungarian', 'Icelandic', 'Indonesian', 'Irish', 'Italian', 'Jamaican Patois', 'Japanese', 'Jèrriais', 'Kalanga', 'Kazakh', 'Khmer', 'Khoekhoe', 'Khoisan', 'Kikongo', 'Kinyarwanda', 'Kirundi', 'Korean', 'Kwangali', 'Kyrgyz', 'Lao', 'Latin', 'Latvian', 'Lingala', 'Lithuanian', 'Lozi', 'Luxembourgish', 'Macedonian', 'Malagasy', 'Malay', 'Maldivian', 'Maltese', 'Manx', 'Marshallese', 'Mauritian Creole', 'Mongolian', 'Montenegrin', 'Māori', 'Nauru', 'Ndau', 'Ndonga', 'Nepali', 'New Zealand Sign Language', 'Niuean', 'Norfuk', 'Northern Ndebele', 'Northern Sotho', 'Norwegian', 'Norwegian Bokmål', 'Norwegian Nynorsk', 'Palauan', 'Papiamento', 'Pashto', 'Persian (Farsi)', 'Polish', 'Portuguese', 'Quechua', 'Romanian', 'Romansh', 'Russian', 'Sami', 'Samoan', 'Sango', 'Serbian', 'Seychellois Creole', 'Shona', 'Sinhala', 'Slovak', 'Slovene', 'Somali', 'Sorani', 'Sotho', 'Southern Ndebele', 'Spanish', 'Swahili', 'Swazi', 'Swedish', 'Swiss German', 'Tajik', 'Tamil', 'Tetum', 'Thai', 'Tigrinya', 'Tok Pisin', 'Tokelauan', 'Tonga', 'Tongan', 'Tshiluba', 'Tsonga', 'Tswana', 'Turkish', 'Turkmen', 'Tuvaluan', 'Ukrainian', 'Upper Guinea Creole', 'Urdu', 'Uzbek', 'Venda', 'Vietnamese', 'Xhosa', 'Zimbabwean Sign Language', 'Zulu'];
				$dbLanguages = [];

        $now = Carbon::now();
        foreach ($languages as $language) {
            $dbLanguages[] = ['name' => $language, 'created_at' => $now, 'updated_at' => $now];
        }

        Language::insert($dbLanguages);

    }
}
