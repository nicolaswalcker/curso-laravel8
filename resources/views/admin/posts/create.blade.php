<h1>Fazer mnova postagem</h1>

<form action="{{ route('posts.store') }}" method="post">
  <label for="title">Título</label>
  <input type="text" name="title" id="title" placeholder="Título">
  <label for="postagem">Postagem</label>
  <textarea name="postagem" id="postagem" cols="30" rows="4" placeholder="Conteúdo da postagem"></textarea>
  <button type="submit">Enviar</button>
</form>