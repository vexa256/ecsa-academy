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
        Schema::create('post_and_pre_test_questions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('Type');
            $table->string('CID');
            $table->string('TID');
            $table->string('MID')->nullable();
            $table->longText('Question');

            $table->integer('CorrectAnswerOption');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_and_pre_test_questions');
    }
};
