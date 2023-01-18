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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id("id");
            $table->longText('name');
            $table->longText('overview')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('air_date')->nullable();
            $table->integer('number')->nullable();
            $table->foreignId('serie_id')->constrained()->cascadeOnDelete();
            $table->unique(['id', 'serie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons');
    }
};
