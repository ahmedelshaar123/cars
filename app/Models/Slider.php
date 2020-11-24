<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

    protected $table = 'sliders';
    public $timestamps = true;
    protected $fillable = array('csrf_token()');
    protected $appends = array('image');

    public function photo()
    {
        return $this->morphOne('App\Models\Photo', 'photoable');
    }

    public function getImageAttribute()
    {
        return $this->photo()->count() ? asset($this->photo->path) : null;
    }

}
