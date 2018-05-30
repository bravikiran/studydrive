<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::POST('/', 'MainController@store');

Route::POST('/login', 'loginController@check' );

Route::get('/logout','MainController@logout');

Route::get('/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);

//Route::get('register/verify/{confirmationCode}', 'RegistrationController@confirm');