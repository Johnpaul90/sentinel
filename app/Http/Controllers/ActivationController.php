<?php

namespace App\Http\Controllers;

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
    public function activate($email, $activationCode){
        $user = User::where('email', $email);
        if(Activation::complete($user, $activationCode)){
            return redirect('/login');

        }else{

        }
    }
}
