<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  PostController
};

// Grupo com prefixo 'posts' para as rotas e com o as 'posts.' para os nomes
Route::group(['prefix'=>'posts', 'as'=>'posts.'], function(){
  Route::get('', [PostController::class, 'index'])->name('index');
  Route::get('/create',[PostController::class, 'create'])->name('create');
  Route::get('/{id}', [PostController::class, 'show'])->name('show');
  //Rota para editar o post
  Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
  //Rota para adicionar post criado ao banco
  Route::post('', [PostController::class, 'store'])->name('store');
  //Rota para deletar post
  Route::delete('/{id}', [PostController::class, 'destroy'])->name('destroy');
  

});



Route::get('/', function () {
    return view('welcome');
});


