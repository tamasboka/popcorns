<?php

use App\Models\Movie;
use App\Models\Person;
use App\Models\Season;
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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('release_year');
            $table->integer('release_month')->nullable();
            $table->integer('release_day')->nullable();
            $table->double('length_hours');
            $table->string('trailer_url')->nullable();
            $table->string('type');
            $table->foreignIdFor(Season::class)
                ->nullable()
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('episode_number')
                ->nullable();
            $table->timestamps();
        });

        Schema::create('movies_watched', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignIdFor(User::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('movie_directors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignIdFor(Person::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::create('movie_writers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignIdFor(Person::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::create('movie_actors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Movie::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignIdFor(Person::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('character');
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
