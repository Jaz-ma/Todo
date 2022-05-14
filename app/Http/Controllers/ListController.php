<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Models\User;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //Lists Page

    public function index(User $user){
        return view('lists.index',[
            'lists'=>$user->lists()->latest()->get()
        ]);
    }

    //Store a List

    public function store(Request $request){
        $this->validate($request,[
            'listName'=>'required'
        ]);

        $request->user()->lists()->create($request->only('listName'));

        return redirect()->route('lists.index',auth()->user())->with('message','List Created');
    }

    //Delete a list
    public function destroy(Lists $list){
        if(auth()->user()->id==$list->user_id){
            $list->delete();
            return redirect()->back()->with('message','List Deleted');
        }
        abort('403','Unauthorized action');
    }
}
