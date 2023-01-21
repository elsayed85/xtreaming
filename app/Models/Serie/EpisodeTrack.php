<?php

namespace App\Models\Serie;

use App\Models\Serie\EpisodeWatchPlaylist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpisodeTrack extends Model
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
}
