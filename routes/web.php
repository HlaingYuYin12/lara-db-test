<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


//Post controller
Route::get('post/create',[PostController::class, 'create'])->name('postCreate');
