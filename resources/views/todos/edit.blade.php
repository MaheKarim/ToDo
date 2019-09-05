@extends('layouts.app')

@section('content')

<h1 class="text-center">
    Update TODO
</h1>

<div class="row justify-content-center">
    <div class="col md-8">
        <div class="card card-default">
            <div class="card-header">
             Update ToDo
            </div>

            <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/update-todos" method="POST">
                    @csrf


                    <div class="form-group">


                        <input type="text" class="form-control" name="name" placeholder="Todo name" value="{{ $todo->name }}">
                        <br>
                        <input type="hidden" name="todo_id"  value="{{ $todo->id }}"
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" placeholder="Your Details" cols="15" rows="10">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success btn-sm">Update now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
