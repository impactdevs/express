<?php

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
        Schema::create('countries', static function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code');
            $table->timestamps();
        });

        Schema::create('currencies', static function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('symbol');
            $table->string('abbr');
            $table->timestamps();
        });

        Schema::create('languages', static function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('skills', static function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('team_sizes', static function (Blueprint $table) {
            $table->id();
            $table->string('size');
            $table->timestamps();
        });

        Schema::create('industries', static function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique('name');
            $table->string('logo')->nullable();
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('sub_industries', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('description');
            $table->foreignId('industry_id');
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->timestamps();
        });

        Schema::create('sub_industry_skills', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('industry_id');
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->foreignId('sub_industry_id');
            $table->foreign('sub_industry_id')->references('id')->on('sub_industries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_industry_skills');
        Schema::dropIfExists('sub_industries');
        Schema::dropIfExists('industries');
        Schema::dropIfExists('team_sizes');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('languages');
        Schema::dropIfExists('currencies');
        Schema::dropIfExists('countries');
    }
};
