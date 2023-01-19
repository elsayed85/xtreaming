<?php

namespace App\Models\Serie;

use App\Models\Country;
use App\Models\Genre;
use App\Models\Keyword;
use App\Models\Person;
use App\Models\Serie\Episode;
use App\Models\Serie\Season;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Serie extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title', 'overview'];

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

    public function setBackdropPathAttribute($value)
    {
        $value = str_replace("/", "", $value);
        $value = str_replace(".jpg", "", $value);
        $this->attributes['backdrop_path'] = $value;
    }

    public function getBackdropPathAttribute($value)
    {
        return $value . ".jpg";
    }

    public function country()
    {
        return $this->belongsTo(Country::class)->withDefault();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, (new SerieGenre())->getTable());
    }

    public function cast()
    {
        return $this->belongsToMany(Person::class, 'serie_casts', 'serie_id', 'person_id');
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class, 'serie_keywords', 'serie_id', 'keyword_id');
    }

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
