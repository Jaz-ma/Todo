<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Show Login Form

    public function index(){
        return view('Auth.login');
    }

    //Login function

    public function login(Request $request){
        $formFields=$request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message',"Welcome". $formFields['username']);
        }
        return redirect()->back()->with('message','Invalid Credentials');
    }
}
