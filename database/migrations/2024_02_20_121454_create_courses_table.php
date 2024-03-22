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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('CID')->unique();
            $table->string('Category')->nullable();
            $table->string('CourseName');
            $table->string('CourseLanguage')->default('English');
            $table->string('CourseOperator')->default('ECSA-HC');
            $table->string('CourseUrl')->default('epn:url');
            $table->longText('CourseDetails');
            $table->string('ThumbNail');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
