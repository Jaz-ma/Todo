<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
    }

    public function store(Request $request){
        $formFields=$request->validate([
            'name'=>'required|max:20',
            'username'=>'required|max:20',
            'password'=>'required|confirmed',
            'email'=>'required|email',

        ]);
        $formFields['password']=bcrypt($formFields['password']);

        $user=User::create($formFields);

        auth()->login($user);

        return redirect()->route('tasks.index',auth()->user());
    }
}
