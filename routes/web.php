<?php

use App\Http\Controllers\PostController; //#2
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//#1 : menambahkan route baru untuk post controller
Route::resource("/posts", PostController::class);