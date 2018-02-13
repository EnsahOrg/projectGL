<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avion extends Model
{
    //
    public function vol()
    {
        return $this->hasMany('App\Vol');
    }
}
