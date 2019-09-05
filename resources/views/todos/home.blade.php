@extends('layouts.app')

@section('content')

<div class="card-header">
        <p class="text-center" style="font-size: 28px">
           ToDo Application
        </p>
    </div>



    <div class="row justify-content-center my-3">
        <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo )
                    <tr>
                    <td scope="row"> {{ $todo->name }}</td>
                    <td>
        <a href="/todos/{{ $todo->id }}" type="button" class="btn btn-primary btn-sm float-right">View Data</a >
        <a href="/todos/{{ $todo->id }}/delete" type="button" class="btn btn-danger btn-sm float-right mr-2">Delete</a >

        @if (!$todo->completed)
         <a href="{{ route('complete', $todo->id) }}" type="button" class="btn btn-warning btn-sm float-right mr-2">Completed</a >
         @endif
                  </td>
              </tr>
                    @endforeach
                </tbody>
        </table>

</div>
@endsection
