<?php

namespace App\Models;

use App\Models\Movie\Movie;
use App\Models\Movie\MovieGenre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, (new MovieGenre())->getTable());
    }
}
