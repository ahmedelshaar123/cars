<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'desc_ar', 'desc_en', 'features_ar', 'features_en');
    protected $appends = array('images');

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }

    public function repairedCars()
    {
        return $this->hasMany('App\Models\RepairedCar');
    }

    public function getImagesAttribute()
    {
        return $this->photos()->count() ? asset($this->photos()->first()>path) : null;
    }

}
