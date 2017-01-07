<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middlware'=>'visitor'], function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/register',[
        'uses'=>'RegistrationController@register',
        'as'=>'authenticate.register'
    ]);

    Route::post('/register', [
        'uses'=>'RegistrationController@postRegister',
        'as'=>'authenticate.register'
    ]);

    Route::get('/login',[
        'uses'=> 'LoginController@getLogin',
        'as'=>'authenticate.login'
    ]);

    Route::post('/login',[
        'uses'=> 'LoginController@postLogin',
        'as'=>'authenticate.login'
    ]);
});

Route::post('/logout',[
    'uses'=> 'LoginController@Logout',
    'as'=>'authenticate.logout'
]);
Route::get('/earnings',[
    'uses'=> 'AdminController@earnings'
])->middleware('admin');

Route::get('/tasks',[
    'uses'=> 'ManagerController@tasks'
])->middleware('manager');

Route::get('/activate/{email}/{activationCode}',[
    'uses'=>'ActivationController@activate'
]);