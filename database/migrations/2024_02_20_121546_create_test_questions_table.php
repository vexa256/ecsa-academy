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
        Schema::create('test_questions', function (Blueprint $table) {
            $table->id();
            $table->string('TestID');
            $table->string('TestType');
            $table->string('CID');
            $table->string('MID')->nullable();
            $table->string('SID')->nullable();
            $table->string('QuestionID');
            $table->integer('TestTime')->default(20);

            for ($i = 1; $i <= 10; $i++) {
                $table->string('Question'.$i);
                for ($j = 1; $j <= 4; $j++) {
                    $table->string('Question'.$i.'Objective'.$j);
                }
                $table->integer('Question'.$i.'CorrectObjective');
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_questions');
    }
};
