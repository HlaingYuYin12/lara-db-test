<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


//Post controller
Route::get('post/list',[PostController::class, 'index'])->name('postList'); //import ***
