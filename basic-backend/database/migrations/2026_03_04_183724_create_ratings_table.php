<?php

use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class, 'movie_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignidFor(User::class, 'rated_by')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->double('rating');
            $table->string('review_title');
            $table->string('review_content');
            $table->boolean('has_spoilers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
