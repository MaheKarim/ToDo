@extends('layouts.app')
@section('title')
    Show | Data
@endsection
@section('content')
     <div class="container">
         <h1 class="text-center my-5">
            {{ $todo->name }}
         </h1>

     <div class="row justify-content-center">
         <div class="col-md-6">
             <div class="card card-default">
                 <div class="card-header">
                    Details
                 </div>

                 <div class="card-body">
                     {{ $todo->description }}
                 </div>
                </div>
                <a href="{{ route("todos.edit", $todo->id) }}" class="btn btn-success btn-sm my-2">Edit</a>
         </div>
     </div>
    </div>
@endsection
