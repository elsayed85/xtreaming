<?php

namespace App\Models\Movie;

use App\Models\Movie\WatchPlaylist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectLink extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'movie_direct_links';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function watchPlaylist()
    {
        return $this->belongsTo(WatchPlaylist::class);
    }

    public function getUrlAttribute($value)
    {
        // if value contains with /subtitles/ then replace / with - and return route
        if (strpos($value, 's1id4s7b') !== false) {
            $value = str_replace("/", "-", $value);
            return route('movie.server_playlist', ['path' => $value]);
        }

        return $value;
    }
}
