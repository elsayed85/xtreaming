<?php

namespace App\Models\Serie;

use App\Models\Serie\Season;
use App\Models\Serie\Serie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
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

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
