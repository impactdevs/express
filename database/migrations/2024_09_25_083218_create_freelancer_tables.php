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
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user')->unique();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->string('phone', 20);
            $table->string('job_type', 50);
            $table->string('job_title', 50);
            $table->date('date_of_birth');
            $table->longText('description');
            $table->string('profile_picture_path')->nullable();
            $table->foreignId('country')->nullable();
            $table->foreign('country')->references('id')->on('countries');
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
        });

        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer');
            $table->foreign('freelancer')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('level', 20);
            $table->string('skill', 50);
            $table->timestamps();
        });

        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer');
            $table->foreign('freelancer')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('degree', 50);
            $table->string('university_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer');
            $table->foreign('freelancer')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('certification_type', 50);
            $table->string('certified_from');
            $table->date('certified_on');
            $table->timestamps();
        });

        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer');
            $table->foreign('freelancer')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('organisation');
            $table->string('position');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer');
            $table->foreign('freelancer')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('name');
            $table->string('level', 30);
            $table->timestamps();
        });

        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('freelancer');
            $table->foreign('freelancer')->references('id')->on('freelancers')->onDelete('cascade');
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
        Schema::dropIfExists('languages');
        Schema::dropIfExists('experience');
        Schema::dropIfExists('certifications');
        Schema::dropIfExists('education');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('freelancers');
    }
};
