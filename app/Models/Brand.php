<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $table = 'brands';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en');

    public function models()
    {
        return $this->hasMany('App\Models\Modell');
    }

}
