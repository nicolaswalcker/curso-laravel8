<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  PostController
};

// Grupo com prefixo 'posts' para as rotas e com o as 'posts.' para os nomes
Route::group(['prefix'=>'posts', 'as'=>'posts.'], function(){
  Route::get('', [PostController::class, 'index'])->name('index');
  Route::get('/create',[PostController::class, 'create'])->name('create');
  Route::post('', [PostController::class, 'store'])->name('store');
});



Route::get('/', function () {
    return view('welcome');
});


