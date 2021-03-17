@extends('admin.layouts.template')

@section('titulo')
  {{ $post->title }}  
@endsection

@section('content')
<div class="show-container">
  <article>
    <h1>{{ $post->title }}</h1>
    <p>
      {{ $post->content }}
    </p>
  </article>
  <form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
    <button type="submit">
      Deletar post
    </button>
  </form>
  </div>
@endsection
