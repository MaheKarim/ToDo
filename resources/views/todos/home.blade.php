@extends('layouts.app')

@section('content')
<!-- Just a navbar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">ToDo Application</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </nav>

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
