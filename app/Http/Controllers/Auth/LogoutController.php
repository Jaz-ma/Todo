<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
   //Logout Function

    public function logout(){
        auth()->logout();

        return redirect('/')->with('message','You have been logged out');
    }
}