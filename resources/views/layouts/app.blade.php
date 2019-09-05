<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  <link rel="stylesheet" type="text/css" href="css/milligram.css">  --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>
        @yield('title')
    </title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }}">ToDo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ url('/todos') }}">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="btn btn-success" type="button" href="{{ url('/create-todo') }}">Create New</a>
                    </li>


                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
               <hr>
                  <div class="container ">
                          @if (session()->has('success'))
                          <div class="alert alert-success">
                              {{ session()->get('success') }}
                          </div>
                         @endif
                           @if (session()->has('updateSuccess'))
                               <div class="alert alert-primary">
                                   {{ session()->get('updateSuccess') }}
                               </div>
                           @endif
                          @yield('content')
                   </div>

</body>
</html>
