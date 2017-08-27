<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function signin()
    {
    	return view('auth.signin');
    }

    function signup()
    {
    	return view('auth.signup');
    }

    function home()
    {
    	return view('home');
    }
}
