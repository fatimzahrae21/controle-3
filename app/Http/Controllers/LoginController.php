<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show(){
        return view ('login.show');

    }
    public function login(Request $request){
       
        $login=$request->login;
        $password=$request->password;
        $credentials = ['email'=>$login , 'password'=>$password];

        if(Auth::attempt($credentials)){
            //connectiwh
            $request->session()->regenerate();
            return to_route('homepage')->with('success','vous etes bien connecté ' .$login.".");
        }else{
            //shi haja ghalta
            return back()->withErrors([
                'login'=>'email ou mote de pass incorrect.'
            ])->onlyInput('login');
        }

    }
    public function logout()
    {
        Session::flush();

        Auth::logout();
        return to_route('loginNav')->with('success','vous etes bien deconnectee');
    }
}
