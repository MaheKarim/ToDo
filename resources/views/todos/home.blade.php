@extends('layouts.app')

@section('content')
<!-- Just a navbar start -->


<!-- Just a navbar end -->

<div class="card-header">
        <p class="text-center" style="font-size: 28px">
           ToDo Application
        </p>

    </div>



    <div class="row justify-content-center my-3">


        <div class="card-body">
                 <ul class="list-group">
                    @foreach ($todos as $todo )
                      <li class="list-group-item">
                        {{ $todo->name }}
                         <a href="/todos/{{ $todo->id }}" type="button" class="btn btn-primary btn-sm float-right">View Data</a >
                      </li>
                      @endforeach
                 </ul>
        </div>

</div>
@endsection
