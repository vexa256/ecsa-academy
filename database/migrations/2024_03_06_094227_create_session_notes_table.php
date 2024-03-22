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
        Schema::create('session_notes', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('CID');
            $table->string('NID')->unique();
            $table->string('MID');
            $table->string('SID')->nullable();
            $table->string('DocumentTitle');
            $table->text('AboutThisDocument');
            $table->string('DocumentUrl');
            $table->string('ThumbNail');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_notes');
    }
};