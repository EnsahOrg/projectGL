<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    
    public function getHome()
    {
        return view('home');

    } 

    public function addport(){
    	return view("ports/addPort");
    }


}
