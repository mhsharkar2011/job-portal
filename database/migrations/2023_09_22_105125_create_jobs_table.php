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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_description')->nullable();
            $table->string('requirement')->nullable();
            $table->string('location')->nullable();
            $table->tinyInteger('experience_minimum')->nullable();
            $table->tinyInteger('experience_maximum')->nullable();
            $table->date('experience_month')->nullable();
            $table->tinyText('role')->nullable();
            $table->string('Industry_type')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('logo')->nullable();
            $table->integer('salary_minimum')->nullable();
            $table->integer('salary_maximum')->nullable();
            $table->tinyText('salary_currency')->nullable();
            $table->string('key_skills')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
