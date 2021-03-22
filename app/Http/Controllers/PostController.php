<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

      $data = $request->all();

      if ($request->image->isValid()){
        $nameFile = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();

        $image = $request->image->storeAs('posts', $nameFile);
        $data['image'] = $image;
      }
      
      Post::create($data);
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

      if (Storage::exists($post->image)){
        Storage::delete($post->image);
      };

      
      $post->delete();
      return redirect()
      ->route('posts.index')
      ->with('message', "Post {$post->title} deletado");
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

      $data = $request->all();

      if ($request->image->isValid()){
        if (Storage::exists($post->image)){
          Storage::delete($post->image);
        }
        $nameFile = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();

        $image = $request->image->storeAs('posts', $nameFile);
        $data['image'] = $image;
      }

      $post->update($data);

      return redirect()
      ->route('posts.index')
      ->with('message', "Post {$post->title} editado");
    }

    public function search(Request $request){

      $filters = $request->except('_token');
      $posts = Post::where('title', 'LIKE', "%{$request->search}%")
        ->orWhere('content', 'LIKE', "%{$request->search}%")
        ->latest()
        ->paginate();

      return view('admin.posts.index', compact('posts', 'filters'));
    }
    

}
