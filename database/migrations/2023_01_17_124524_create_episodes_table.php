<?php

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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id('id');
            $table->longText('name');
            $table->longText('overview')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('air_date')->nullable();
            $table->integer('number')->nullable();
            $table->integer('season_number')->nullable();
            $table->foreignId('season_id')->constrained('seasons', 'id')->cascadeOnDelete();
            $table->foreignId('serie_id')->constrained('series', 'id')->cascadeOnDelete();
            $table->boolean('published')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('slidered')->default(false);
            $table->boolean('member_only')->default(false);
            $table->boolean('comment_closed')->default(false);
            $table->unique(['id', 'serie_id', 'season_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
};
