<?php

use App\Models\Genre;
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
        Schema::create('serie_genres', function (Blueprint $table) {
            $table->foreignId('serie_id')->constrained()->cascadeOnDelete();
            $table->foreignId('genre_id')->constrained((new Genre())->getTable())->cascadeOnDelete();
            $table->primary(['serie_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serie_genres');
    }
};
