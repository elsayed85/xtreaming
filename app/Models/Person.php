<?php

namespace App\Models;

use App\Models\Movie\Movie;
use App\Models\Serie\Serie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
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
    protected $table = 'persons';

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_casts', 'person_id', 'movie_id');
    }

    public function series()
    {
        return $this->belongsToMany(Serie::class, 'serie_casts', 'person_id', 'serie_id');
    }

    public function getAvatarAttribute()
    {
        return $this->pp_url ? "https://image.tmdb.org/t/p/w400/" . $this->pp_url : "https://via.placeholder.com/500x750";
    }
}
