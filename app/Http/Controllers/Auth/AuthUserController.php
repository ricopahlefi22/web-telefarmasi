<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    function login(){
        return view('login');
    }
}
