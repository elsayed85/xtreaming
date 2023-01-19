<?php

namespace App\Models\Serie;

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

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
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
