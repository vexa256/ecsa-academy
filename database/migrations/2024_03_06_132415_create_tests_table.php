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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('TestName')->unique();
            $table->string('TID')->unique();
            $table->string('Description')->nullable();
            $table->string('MID')->nullable();
            $table->string('CID')->nullable();
            $table->string('SID')->nullable();
            $table->string('Type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
