<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [PostController::class, 'index']);