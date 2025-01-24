<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/', function () {
    return 'Matched get or post';
});
 
Route::any('/', function () {
    return 'Matched any';
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/users', function (Request $request) {
    dd($request);
});


