<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function getLoginPage(){
        return view('login');
    }

    public function getRegisterPage(){
        return view('register');
    }

}
