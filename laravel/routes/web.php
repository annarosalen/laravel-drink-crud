<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/drinks', 'DrinkController@index') ->name('drinks-index');
Route::get('/show/{id}', 'DrinkController@show') ->name('drink-show');

Route::get('/new/drink', 'DrinkController@create') ->name('drink-create');
Route::post('/new/drink/store', 'DrinkController@store') ->name('drink-store');

Route::get('/edit/{id}', 'DrinkController@edit') ->name('drink-edit');
Route::post('/update/{id}', 'DrinkController@update') ->name('drink-update');

Route::get('/delete/{id}', 'DrinkController@delete') ->name('drink-delete');