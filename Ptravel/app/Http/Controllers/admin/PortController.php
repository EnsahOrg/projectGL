<?php

namespace App\Http\Controllers\admin;

use App\Port;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortController extends Controller
{
    public function createPort(Request $request)
    {
       $port=new Port();
       $port->name=$request->input("nom");
       $port->adresse=$request->input("adress");
       $port->save();
       echo "c fait bb";
    }
    public function getView()
    {
        return view('ports.addPort');
    }
    public function deletePort($id)
    {
     $port=Port::find($id);
     $port->delete();
    }
    public function updatePort($id)
    {
        $port=Port::find($id);
        $port->name="Hoceimas";
        $port->adresse="hay atlas 1 rue 13 n60 meknes hhh maroc";
        $port->save();
        echo "c fait bb";
    }
    public function getPorts($id=null)
    {
     if($id==null)
     {
         $ports=Port::all();
         /*foreach ($ports as $port)
         {
             echo $port." /////";
         }*/
         $arr=Array('ports'=>$ports);
         return view('index',$arr);
     }
     else
     {
         $port=Port::find($id);
         echo $port;
         if($port==null)
             echo "error 404";
     }
    }
}
