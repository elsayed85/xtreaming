<?php

use App\Models\Serie\EpisodeWatchPlaylist;
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
        Schema::create('episode_direct_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('playlist_id')->constrained((new EpisodeWatchPlaylist())->getTable())->cascadeOnDelete();
            $table->longText('url');
            $table->string('label')->nullable();
            $table->string('ext')->nullable();
            $table->string('kind')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episode_direct_links');
    }
};
