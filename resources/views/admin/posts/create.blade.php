@extends('admin.layouts.template')

@section('titulo')
  Bloggo | Create 
@endsection

@section('content')
<div class="create-container">
  <h1>Fazer nova postagem</h1>

  <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @include('admin.posts._partials.form')
  </form>
</div>
@endsection

