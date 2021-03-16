<h1>{{ $post->title }}</h1>

<section>
  <p>
    {{ $post->content }}
  </p>
</section>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="delete">
  <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
  <button type="submit">
    Deletar post
  </button>
</form>