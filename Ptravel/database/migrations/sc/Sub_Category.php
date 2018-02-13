<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function clients()
    		{
    			return $this->hasMany('App\Client');
    		}
}
