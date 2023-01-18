<?php

use App\Models\Country;
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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->longText('title');
            // $table->string('slug');
            $table->mediumText('original_title');
            $table->longText('overview');
            $table->integer('imdb_rating')->nullable();
            $table->string('imdb_id')->nullable();
            $table->date('release_date')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->foreignId('country_id')->nullable()->constrained((new Country())->getTable())->nullOnDelete();
            $table->boolean('published')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('slidered')->default(false);
            $table->boolean('member_only')->default(false);
            $table->boolean('comment_closed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
};
