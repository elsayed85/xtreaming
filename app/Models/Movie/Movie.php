<?php

namespace App\Models\Movie;

use App\Models\Country;
use App\Models\Genre;
use App\Models\Keyword;
use App\Models\Movie\MovieGenre;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::updating(function (Movie $movie) {
            unset($movie->poster_preview);
        });
    }
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $casts = [
        'release_date' => 'date',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class)->withDefault();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, (new MovieGenre())->getTable());
    }

    public function movieCollections()
    {
        return $this->belongsToMany(MovieCollection::class, 'movie_collection_items');
    }

    public function cast()
    {
        return $this->belongsToMany(Person::class, 'movie_casts', 'movie_id', 'person_id');
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'movie_keywords', 'movie_id', 'keyword_id');
    }
}
