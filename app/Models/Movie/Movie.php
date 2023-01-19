<?php

namespace App\Models\Movie;

use App\Models\Country;
use App\Models\Genre;
use App\Models\Keyword;
use App\Models\Movie\DirectLink;
use App\Models\Movie\MovieGenre;
use App\Models\Movie\WatchPlaylist;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Comments\Models\Concerns\HasComments;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
    use HasFactory;
    use HasComments;
    use HasTranslations;

    public $translatable = ['title', 'overview'];

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

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeSlidered($query)
    {
        return $query->where('slidered', true);
    }

    public function setPosterPathAttribute($value)
    {
        $value = str_replace("/", "", $value);
        $value = str_replace(".jpg", "", $value);
        $this->attributes['poster_path'] = $value;
    }

    public function getPosterPathAttribute($value)
    {
        return $value . ".jpg";
    }

    public function setBackdropPathAttribute($value)
    {
        $value = str_replace("/", "", $value);
        $value = str_replace(".jpg", "", $value);
        $this->attributes['backdrop_path'] = $value;
    }

    public function getBackdropPathAttribute($value)
    {
        return $value . ".jpg";
    }

    public function getTrailerUrlAttribute($value)
    {
        return $value ? "https://www.youtube.com/watch?v=" . $value : null;
    }

    public function setTrailerUrlAttribute($value)
    {
        $value = str_replace("https://www.youtube.com/watch?v=", "", $value);
        $this->attributes['trailer_url'] = $value;
    }

    /*
    * This string will be used in notifications on what a new comment
    * was made.
    */
    public function commentableName(): string
    {
        return $this->name;
    }

    /*
    * This URL will be used in notifications to let the user know
    * where the comment itself can be read.
    */
    public function commentUrl(): string
    {
        return route('movies.show', $this);
    }

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

    public function watchPlaylists()
    {
        return $this->hasMany(WatchPlaylist::class);
    }

    public function directLinks()
    {
        return $this->hasManyThrough(
            DirectLink::class,
            WatchPlaylist::class,
            'movie_id',
            'playlist_id',
            'id',
            'id'
        );
    }

    public function tracks()
    {
        return $this->hasManyThrough(
            Track::class,
            WatchPlaylist::class,
            'movie_id',
            'playlist_id',
            'id',
            'id'
        );
    }
}
