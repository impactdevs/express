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
        Schema::create('freelancers', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('phone', 20);
            $table->string('job_type', 50);
            $table->string('job_title', 50);
            $table->date('date_of_birth');
            $table->longText('description');
            $table->string('profile_picture_path')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
        });

        Schema::create('freelancer_skills', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id');
            $table->foreign('freelancer_id')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('skill', 80);
            $table->string('level', 20);
            $table->fullText('skill');
            $table->timestamps();
        });

        Schema::create('education', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id');
            $table->foreign('freelancer_id')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('degree', 100);
            $table->string('university_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::create('certifications', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('freelancer_id');
            $table->foreign('freelancer_id')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('certification_type', 50);
            $table->string('certified_from');
            $table->date('certified_on');
            $table->timestamps();
        });

        Schema::create('experience', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id');
            $table->foreign('freelancer_id')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('organisation');
            $table->string('position');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::create('freelancer_languages', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer_id')->nullable();
            $table->foreign('freelancer_id')->references('id')->on('freelancers')->onDelete('cascade');
            $table->foreignId('language_id');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('level', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancer_languages');
        Schema::dropIfExists('experience');
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('education');
        Schema::dropIfExists('freelancer_skills');
        Schema::dropIfExists('freelancers');
    }
};
