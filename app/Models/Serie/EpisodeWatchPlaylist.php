<?php

namespace App\Models\Serie;

use App\Models\Serie\EpisodeDirectLink;
use App\Models\Serie\EpisodeTrack;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpisodeWatchPlaylist extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function tracks()
    {
        return $this->hasMany(EpisodeTrack::class, 'playlist_id');
    }

    public function links()
    {
        return $this->hasMany(EpisodeDirectLink::class, 'playlist_id');
    }

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
}
