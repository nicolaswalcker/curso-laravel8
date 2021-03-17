<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
      $posts = Post::latest()->paginate();
      return view('admin.posts.index', compact('posts'));
    }

    public function create(){
      return view('admin.posts.create');
    }

    public function store(StoreUpdatePostRequest $request){
      
      Post::create($request->all());
      return redirect()->route('posts.index');
    }

    public function show($id){
      if (!$post = Post::find($id)){
        return redirect()->route('posts.index');
      };

      return view('admin.posts.show', compact('post'));
    }

    public function destroy($id){
      if (!$post = Post::find($id)){
        return redirect()->route('posts.index');
      };
      $post->delete();
      return redirect()
      ->route('posts.index')
      ->with('message', 'Post deletado');
    }

    public function edit($id){
      if (!$post = Post::find($id)){
        return redirect()->back();
      };

      return view('admin.posts.edit', compact('post'));
    }

    public function update(StoreUpdatePostRequest $request, $id){
      if (!$post = Post::find($id)){
        return redirect()->back();
      };

      $post->update($request->all());

      return redirect()
      ->route('posts.index')
      ->with('message', 'Post editado');
    }
    

}
