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

    protected $with = ['watchPlaylist'];

    public function watchPlaylist()
    {
        return $this->belongsTo(EpisodeWatchPlaylist::class, 'playlist_id');
    }

    public function setUrlAttribute($value)
    {
        if (strpos($value, 's1id4s7b') !== false) {
            $value = explode("_", $value)[1];
            $value = explode(".", $value)[0];
            $this->attributes['url'] = $value;
        } else {
            $this->attributes['url'] = $value;
        }
    }

    public function getUrlAttribute($value)
    {
        if (is_numeric($value)) {
            $value =  "s1id4s7b-" . $this->watchPlaylist->provider . "-tv_$value.m3u8";
            return route('playlist.serve', ['path' => $value]);
        }
        return $value;
    }
}
