<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    //show all todo
    public function index(){
        //3ytna db l kolxi mn DB
        $MyTodos= 'App\Todo'::all();
            return view('todos.todos')->with([
                'todos'=>$MyTodos
            ]);
    
}
public function show( Todo $todo) //todo rh hwa lmodeil + hada lblan tysma debanding 
                                  //injactioin (ha9n al mot3li9at)

{
    //show one todo
    //had withTodo hya reflection 
    //tdurha hna hrf lwl kbir Todo u f tamplet tadurha sgur "todo"
    return view('todos.todo')->withTodo($todo); //reflection

}

}