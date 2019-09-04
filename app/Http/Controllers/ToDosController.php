<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;


class ToDosController extends Controller
{
   public function index(){

    # code...
    $data = [];
    $data['todos'] = Todo::all();
    return view('todos.home', $data);

   }


    public function show($todoId)
   {
      # code...
       $data = [];
       $data['todo'] = Todo::find($todoId);
    //   $todo = ToDo::find($todoId);

     // return view('todos.show')->with('todo',$todo);
      return view('todos.show', $data);
   }
}


