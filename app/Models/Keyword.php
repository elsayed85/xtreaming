<?php

namespace App\Models;

use App\Models\Movie\Movie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
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

    public function movies()
    {
        return $this->belongsToMany(Movie::class , 'movie_keywords' , 'keyword_id' , 'movie_id');
    }
}
