<?php

namespace App\Models;

use App\Models\Movie\Movie;
use App\Models\Movie\MovieGenre;
use App\Models\Serie\Serie;
use App\Models\Serie\SerieGenre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Genre extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, (new MovieGenre())->getTable());
    }

    public function series()
    {
        return $this->belongsToMany(Serie::class, (new SerieGenre())->getTable());
    }
}
