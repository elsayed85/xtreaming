<?php

namespace App\Models\Serie;

use App\Models\Serie\Episode;
use App\Models\Serie\Serie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Season extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name' , 'overview'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public $timestamps = false;

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
