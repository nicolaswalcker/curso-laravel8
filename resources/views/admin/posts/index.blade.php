@extends('admin.layouts.template')
@section('titulo')
  Bloggo | Home 
@endsection

@section('content')

<div class="index-container">
  <h1>Posts</h1>
  <a href="{{ route('posts.create') }}">Criar novo</a>
  @if (session('message'))
    <p>{{ session('message') }}</p>
  @endif

  <form action="{{ route('posts.search') }}" method="post">
    @csrf
    <label for="search"></label>
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Pesquisar</button>
  </form>

  @foreach($posts as $post)
  <article>
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }} <span><a href="{{ route('posts.show', $post->id) }}">Ler mais</a></span> </p>
  </article>
  @endforeach

  @if(isset($filters))
    {{ $posts->appends($filters)->links() }}
  @else
    {{ $posts->links() }}
  @endif
</div>
  
@endsection


