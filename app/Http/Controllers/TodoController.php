<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
        $userID = Auth::user()->id;
        $lists = Todo::where("users_id",$userID)->get();
        return view("todo")->with(compact("lists"));
    }

    public function store(Request $req){
        $content = $req->content;
        $userID = Auth::user()->id;

        $list = new Todo;
        $list->users_id = $userID;
        $list->content = $content;
        $list->save();

        return redirect("/todo");
    }

    public function delete($id){
        Todo::destroy($id);
        
        return redirect("/todo");
    }
}
