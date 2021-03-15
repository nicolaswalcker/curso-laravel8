<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  PostController
};

Route::group(['prefix'=>'posts', 'as'=>'posts.'], function(){
  Route::get('', [PostController::class, 'index'])->name('index');
  Route::get('/create',[PostController::class, 'create'])->name('create');
  Route::post('', [PostController::class, 'store'])->name('store');
});



Route::get('/', function () {
    return view('welcome');
});


