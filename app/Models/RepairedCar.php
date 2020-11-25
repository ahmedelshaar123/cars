<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepairedCar extends Model
{
    protected $table = 'repaired_cars';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'phone', 'year', 'status', 'service_id', 'modell_id');

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function model()
    {
        return $this->belongsTo('App\Models\Modell');
    }
}
