<?php

use App\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AuthController@getLoginPage');

Route::get('/register', 'AuthController@getRegisterPage');

Route::get('/home', function(){
    $users = User::all();
    return view('home', ['users' => $users]);
});
