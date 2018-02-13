<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public function vol()
    {
        return $this->belongsTo('App\Vol');
    }
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

}
