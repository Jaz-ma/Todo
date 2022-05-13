<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //Tasks List Page

    public function index(User $user){
        return view('Tasks.index',[
            'tasks'=>$user->tasks()->latest()->get()
        ]);
    }

    //Store Task

    public function store(Request $request){

        $this->validate($request,[
            'taskName'=>'required'
        ]);
        $request->user()->tasks()->create($request->only('taskName'));
        return redirect()->back()->with('message','Task Created');
    }

}
