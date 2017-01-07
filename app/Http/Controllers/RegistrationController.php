<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sentinel;

class RegistrationController extends Controller
{
    public function register(){
    	return view('authenticate.register');
    }
	
	public function postRegister(Request $request){
	
	    $user= Sentinel::register($request->all());
		$activation = Activation::create($user);

		$role = Sentinel::findRoleBySlug('manager');
		$role->users()->attach($user);
		$this->sendEmail($user, $activation->code);
    	return redirect('/');
    }
	private function sendEmail($user, $code){
		Mail::send('emails.activation',[
			'user'=> $user,
			'code'=> $code
		], function($message)use($user){
			$message->to($user->email);
			$message->subject("Hello $user->first_name, activate your account.");

		});

	}
}
