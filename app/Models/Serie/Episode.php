<?php

namespace App\Models\Serie;

use App\Models\Serie\EpisodeDirectLink;
use App\Models\Serie\EpisodeTrack;
use App\Models\Serie\EpisodeWatchPlaylist;
use App\Models\Serie\Season;
use App\Models\Serie\Serie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Episode extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name', 'overview'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function watchPlaylists()
    {
        return $this->hasMany(EpisodeWatchPlaylist::class);
    }

    public function directLinks()
    {
        return $this->hasManyThrough(
            EpisodeDirectLink::class,
            EpisodeWatchPlaylist::class,
            'episode_id',
            'playlist_id',
            'id',
            'id'
        );
    }

    public function tracks()
    {
        return $this->hasManyThrough(
            EpisodeTrack::class,
            EpisodeWatchPlaylist::class,
            'episode_id',
            'playlist_id',
            'id',
            'id'
        );
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
}
