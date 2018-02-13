<?php

namespace App\Http\Controllers\client;

use App\Reservation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    //
    public function create($id)
    {
        if ($user = Sentinel::check())
        {
            $res= new Reservation();
            $res->vol_id=$id;
            $res->client_id=$user->id;
            $res->save();
            echo "c bien";
        }
        else
        {
            // User is not logged in
        }
    }
}
