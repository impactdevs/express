<?php

use App\Models\Freelancer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('freelancer')->nullable();
            // $table->foreign('freelancer')->references('id')->on('freelancers')->onDelete('cascade');
            $table->foreignIdFor(Freelancer::class);
            $table->foreignId('employer')->nullable();
            $table->foreign('employer')->references('id')->on('employers')->onDelete('cascade');
            $table->string('platform', 30);
            $table->string('handle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_media');
    }
};
