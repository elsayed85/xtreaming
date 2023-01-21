<?php

namespace App\Models\Movie;

use App\Models\Movie\DirectLink;
use App\Models\Movie\Movie;
use App\Models\Movie\Track;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchPlaylist extends Model
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
    protected $table = 'movie_watch_playlists';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function tracks()
    {
        return $this->hasMany(Track::class , 'playlist_id');
    }

    public function links()
    {
        return $this->hasMany(DirectLink::class , 'playlist_id');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
