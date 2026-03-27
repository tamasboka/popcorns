<?php

use App\Models\Genre;
use App\Models\Person;
use App\Models\Series;
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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('release_year');
            $table->integer('release_month')->nullable();
            $table->integer('release_day')->nullable();
            $table->integer('ended_year')->nullable();
            $table->integer('ended_month')->nullable();
            $table->integer('ended_day')->nullable();
            $table->timestamps();
        });

        Schema::create('actor_series', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Series::class)
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignIdFor(Person::class, 'actor_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('director_series', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Series::class)
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignIdFor(Person::class, 'director_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('series_writer', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Series::class)
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignIdFor(Person::class, 'writer_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('series_watched', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Series::class)
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignIdFor(User::class)
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::create('genre_series', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Genre::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignIdFor(Series::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
