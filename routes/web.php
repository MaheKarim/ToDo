<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('todos','ToDosController@index');
Route::get('todos/{todo}','ToDosController@show');
Route::get('/create-todo','ToDosController@create');
Route::post('/store-todo','ToDosController@store');
Route::get('/todo/edit/{todo}','ToDosController@edit')->name("todos.edit");


Route::post('/update-todos','ToDosController@update')->name("formUpdate");

