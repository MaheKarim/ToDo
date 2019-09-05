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
    // $todo = ToDo::find($todoId);
    // return view('todos.show')->with('todo',$todo);

      return view('todos.show', $data);
   }

    public function create(){
    return view('todos.create');

   }

   public function store(Request $request){
    $request->validate([
       'name' => 'required|min:5|max:120',
       'description' => 'required',
    ]);

 // $data = request()->all(); as Request $request
    $todo = new Todo();
    $todo->name = $request->name;
    $todo->description = $request->description;
    $todo->completed = false;
    $todo->save();
    session()->flash('success','Todo Create successfully!');
    return redirect('/todos');
   }

   public function edit($todoId){
    $todo = Todo::find($todoId);
    // echo "Hello world";
    return view('todos.edit')->with('todo', $todo);
   }


   public function update(Request $request){
    $request->validate([
        'name' => 'required|min:5',
        'description' => 'required',
     ]);
    $todo = Todo::find($request)->first();
    $todo->name = $request->name;
    $todo->description = $request->description;
    $todo->save();

    session()->flash('updateSuccess','Successfully Updated!');
    return redirect('/todos');
   }



   public function destroy($id){

    $todo = Todo::find($id);
    $todo->delete();
    return redirect('/todos');
   }
}


