<a href="{{ route('posts.create') }}">Criar novo</a>

@if (session('message'))
  <p>{{ session('message') }}</p>
@endif

<br>
<h1>Posts</h1>

@foreach($posts as $post)
  <h3>{{ $post->title }}</h3>
  <p>{{ $post->content }} <span><a href="{{ route('posts.show', $post->id) }}">Ler mais</a></span> </p>
@endforeach