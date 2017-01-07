<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(){
        return view('authenticate.login');
    }

    public function postLogin(Request $request){
        Sentinel::authenticate($request->all());

        $slug = Sentinel::getUser()->roles()->first()->slug ;
        if($slug == 'admin'){
            return redirect('/earnings');
        }elseif($slug == 'manager'){
            return redirect('/tasks');
        }


    }
    public function Logout(){
        Sentinel::logout();

        return redirect()->route('authenticate.login');
    }
}
