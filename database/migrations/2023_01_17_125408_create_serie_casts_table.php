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
        Schema::create('serie_casts', function (Blueprint $table) {
            $table->foreignId('person_id')->constrained('persons' , 'id')->cascadeOnDelete();
            $table->foreignId('serie_id')->constrained('series' , 'id')->cascadeOnDelete();
            $table->unique(['person_id', 'serie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serie_casts');
    }
};
