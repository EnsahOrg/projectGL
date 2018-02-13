<?php

namespace App\Http\Controllers\admin;

use App\Vol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class volController extends Controller
{
    public function createVol()
    {
     $vol= new Vol();
     $vol->port_depart=1;
        $vol->port_depart=2;
        $vol->port_arrivee=2;
        $vol->heure_depart="18:00";
        $vol->heure_arrivee="20:00";
        $vol->nb_place=400;
        $vol->place_dispo=400;
        $vol->name="hamzat";
        $vol->save();
        echo "c'est bien mon ami";

    }
    public function deleteVol()
    {
     $vol=Vol::find(2);
     //dd($vol);
     $vol->delete();
     echo "il est supprimé ";
    }
    public function updateVol($id)
    {
        $vol=Vol::find(1);

    }
    public function getVol()
    {
      $vols=Vol::all();
      echo "hello";
      /*foreach ($vols as $vol)
      {
          echo $vol->name ." </br> ";
          echo $vol->avion;

      }*/
      $arr=Array('vols'=>$vols);
      return view("vols",$arr);
    }
}
