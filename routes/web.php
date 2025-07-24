<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


//Post controller
// Route::get('post/create',[PostController::class, 'create'])->name('postCreate');


Route::get('post/create',[PostController::class,'create'])->name('postCreate');

Route::get('post/list',[PostController::class, 'list'])->name('postList');

Route::get('post/update/{id}',[PostController::class, 'update'])->name('postUpdate');

Route::get('post/delete/{id}',[PostController::class, 'delete'])->name('postDelete');

