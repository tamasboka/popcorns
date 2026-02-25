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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('release_year');
            $table->double('length_hours');
            $table->double('rating');
            $table->string('director');
            $table->string('writer');
            $table->enum('genre', ['action', 'fantasy', 'sci-fi', 'romance', 'horror', 'dreama', 'crime']);
            $table->boolean('is_watched');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
