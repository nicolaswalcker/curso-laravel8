<h1>Fazer mnova postagem</h1>
@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<form action="{{ route('posts.store') }}" method="post">
  @csrf
  <label for="title">Título</label>
  <input type="text" name="title" id="title" placeholder="Título" value='{{ old('title') }}'>
  <label for="content">Postagem</label>
  <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo da postagem">{{ old('content') }}</textarea>
  <button type="submit">Enviar</button>
</form>