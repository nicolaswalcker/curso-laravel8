<h1>Editar postagem</h1>

@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="post">
  @csrf
  @method('put')
  <label for="title">Título</label>
  <input type="text" name="title" id="title" placeholder="Título" value='{{ $post->title }}'>
  <label for="content">Postagem</label>
  <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo da postagem">{{ $post->content }}</textarea>
  <button type="submit">Enviar</button>
</form>