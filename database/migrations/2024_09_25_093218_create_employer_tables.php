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

        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('company_name');
            $table->string('tagline');
            $table->string('company_owner_name');
            $table->string('phone', 20);
            $table->foreignId('industry_id')->unique();
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->foreignId('team_size_id')->unique();
            $table->foreign('team_size_id')->references('id')->on('team_sizes');
            $table->date('established_on');
            $table->longText('description');
            $table->string('profile_picture_path')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('kyc_document_name')->nullable();
            $table->string('kyc_document_path')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
