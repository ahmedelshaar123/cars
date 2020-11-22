<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Model extends Model 
{

    protected $table = 'models';
    public $timestamps = true;
    protected $fillable = array('name', 'brand_id');

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

}