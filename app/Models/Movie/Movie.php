<?php

namespace App\Models\Movie;

use App\Models\Genre;
use App\Models\Movie\MovieGenre;
use App\Models\Platform;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::creating(function (Movie $movie) {
            unset($movie->poster_preview);
        });
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

    public function platform()
    {
        return $this->belongsTo(Platform::class)->withDefault();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, (new MovieGenre())->getTable());
    }
}
