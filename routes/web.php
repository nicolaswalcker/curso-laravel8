<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  PostController
};

Route::group(['prefix'=>'posts'], function(){
  Route::get('/create',[PostController::class, 'index'])->name('posts.create');
  Route::get('', [PostController::class, 'index'])->name('posts.name');
});



Route::get('/', function () {
    return view('welcome');
});


