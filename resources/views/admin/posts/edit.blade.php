@extends('admin.layouts.template')

@section('titulo')
  Edit | {{ $post->title }}  
@endsection

@section('content')
<div class="edit-container">
  <h1>Editar postagem</h1>

  <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @include('admin.posts._partials.form')
  </form>
  @endsection
</div>
 