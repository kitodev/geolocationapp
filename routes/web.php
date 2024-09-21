<?php

use Illuminate\Support\Facades\Route;


Route::get('/your-page', 'YourController@method')->middleware('block.california');

Route::get('/', function () {
    return view('welcome');
});
