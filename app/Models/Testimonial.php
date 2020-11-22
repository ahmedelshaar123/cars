<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    protected $table = 'testimonials';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'job_ar', 'job_en', 'desc_ar', 'desc_en');
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
