<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('todos','ToDosController@index');
Route::get('todos/{todo}','ToDosController@show');
