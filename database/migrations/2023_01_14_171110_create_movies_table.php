<?php

use App\Models\Platform;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('overview');
            $table->string('country_code');
            $table->integer('imdb_rating')->nullable();
            $table->integer('tmdb_id');
            $table->string('imdb_id')->nullable();
            $table->integer('duration')->nullable();
            $table->date('release_date')->nullable();
            $table->string('trailer_url')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->foreignId('platform_id')->nullable()->constrained((new Platform())->getTable())->nullOnDelete();
            $table->boolean('published')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('slidered')->default(false);
            $table->boolean('comment_closed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
