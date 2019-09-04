@extends('layouts.app')

@section('content')

<h1 class="text-center">
    Create TODO
</h1>

<div class="row justify-content-center">
    <div class="col md-8">
        <div class="card card-default">
            <div class="card-header">
                Create New One
            </div>

            <div class="card-body">
                <form action="{{ url('store-todo') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Todo name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" placeholder="Your Details" cols="15" rows="10"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success btn-sm">Create new</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

<div class="container">

    </div>
