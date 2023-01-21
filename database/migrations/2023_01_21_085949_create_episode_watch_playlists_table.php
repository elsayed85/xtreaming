<?php

use App\Models\Serie\Episode;
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
        Schema::create('episode_watch_playlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('episode_id')->constrained((new Episode())->getTable())->cascadeOnDelete();
            $table->string('provider');
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode_watch_playlists');
    }
};
