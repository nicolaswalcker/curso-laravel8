@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif


@csrf
<label for="title">Título</label>
  <input type="text" name="title" id="title" placeholder="Título" value='{{ $post->title ?? old('title') }}'>
  <label for="content">Postagem</label>
  <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo da postagem">{{ $post->content ?? old('content') }}</textarea>
  <button type="submit">Enviar</button>