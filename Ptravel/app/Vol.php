<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    //
    public function avion()
    {
        return $this->belongsTo('App\Avion');
    }
    public function reservation()
    {
        return $this->hasMany('App\Reservation');
    }
}
