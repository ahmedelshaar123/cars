<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modell extends Model
{

    protected $table = 'models';
    public $timestamps = true;
    protected $fillable = array('name', 'brand_id');

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');

    }
    public function repairedCars()
    {
        return $this->hasMany('App\Models\RepairedCar');
    }

}
