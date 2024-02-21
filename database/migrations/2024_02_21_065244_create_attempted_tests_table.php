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
        Schema::create('attempted_tests', function (Blueprint $table) {
            $table->id();
            $table->string('TestID');
            $table->string('StudentID');
            $table->string('CID');
            $table->string('Completed')->default('status');
            $table->string('MID')->nullable();
            $table->string('SID')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attempted_tests');
    }
};
