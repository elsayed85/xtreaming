<?php

namespace App\Models\Serie;

use App\Models\Serie\EpisodeWatchPlaylist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpisodeDirectLink extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public $timestamps = false;

    public function watchPlaylist()
    {
        return $this->belongsTo(EpisodeWatchPlaylist::class);
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
