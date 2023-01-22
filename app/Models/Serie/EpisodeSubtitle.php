<?php

namespace App\Models\Serie;

use App\Models\Serie\Episode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EpisodeSubtitle extends Model
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

    public $with = ['episode'];

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }

    public function getPathAttribute($value)
    {
        if ($value) {
            $id = $this->episode->serie_id;
            $episode_number = $this->episode->number;
            $season_number = $this->episode->season_number;
            $path =  "Subtitles_" . $id . "_" . $season_number . "_" . $episode_number . "_" . "$value.vtt";
            return route('subtitle.serve', ['path' => $path]);
        }
    }
}
