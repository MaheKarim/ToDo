<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;


class ToDosController extends Controller
{
   public function index(){

    $data = [];
    $data['todos'] = ToDo::all();
    return view('todos.home', $data);

   }
}
