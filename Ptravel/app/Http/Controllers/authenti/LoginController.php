<?php

namespace App\Http\Controllers\authenti;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Validator;

class LoginController extends Controller
{
    //
    public function postLogin(Request $request)
    {
        $credentials = [
            'email'    => $request->input('login'),
            'password' => $request->input('password'),
        ];
        //dd($credentials);
        try{
            $user=Sentinel::authenticate($credentials);
            if($user)
            {
               /*if(Sentinel::inRole('Admin'))
                {
                    echo 'hello admin';
                }
                else{
                    echo 'hello user';
                }*/


               return view("ports.addPort");
            }
            else{
                return redirect('/')->with('erors', 'email n\'existe pas ou password faut' );
            }
        }catch (Exception $e){
            dd($e);
        }

        //echo 'hello vous avez inscrit sous e-mail suivant:'.$user->email;
    }
    public function getLogin()
    {
        return view('login');
    }
    public function postRegister()
    {
        $credentials = [
            'email'    => 'hamza.1996sfr@gmail.com',
            'password' => 'Hamza1996...',
        ];

        $user = Sentinel::registerAndActivate($credentials);
        echo 'hello vous avez inscrit sous e-mail suivant:'.$credentials["email"];
    }
    public function getRegister()
    {

    }
}
