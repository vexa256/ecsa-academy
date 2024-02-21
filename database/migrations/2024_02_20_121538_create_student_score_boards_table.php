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
        Schema::create('student_score_boards', function (Blueprint $table) {
            $table->id();
            $table->string('StudentID');
            $table->string('CID');
            $table->string('TestType');
            $table->integer('Score');
            $table->string('MID')->nullable();
            $table->string('SID')->nullable();
            $table->string('TestID');
            $table->string('Status')->default('false');
            $table->string('Certify')->default('false');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_score_boards');
    }
};
