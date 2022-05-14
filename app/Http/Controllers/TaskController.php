<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //Tasks List Page

    public function index(Lists $list){
        return view('Tasks.index',[
            'list'=>$list,
            'tasks'=>$list->tasks()->latest()->get()
        ]);
    }

    //Store Task

    public function store(Request $request){
        $this->validate($request,[
            'taskName'=>'required',

        ]);
        $request->user()->tasks()->create([
            'taskName'=> $request->taskName,
            'lists_id'=>$request->list_id
        ]);
        return redirect()->back()->with('message','Task Created');
    }

    //Delete Task

    public function destroy(Task $task){

        if(auth()->user()->id==$task->user_id){
            $task->delete();
            return redirect()->route('tasks.index',auth()->user()->username)->with('message','Task Deleted');
        }
        abort('403','Unauthorized action');
    }
}
