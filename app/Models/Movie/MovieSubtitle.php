<?php

namespace App\Models\Movie;

use App\Models\Movie\Movie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieSubtitle extends Model
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

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function getPathAttribute($value)
    {
        if ($value) {
            $id = $this->movie_id;
            $path = "Subtitles_" . $id . "_" . "$value.vtt";
            return route('subtitle.serve', ['path' => $path]);
        }
    }
}
