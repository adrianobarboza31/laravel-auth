@extends('layouts.app')
@section('content')
<div class="container">
  <h1>compila per aggiungere</h1>
  <form action="{{ route('admin.categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
@method('PUT')
    <label for="nome_categoria">nome categoria</label>
    <input type="text" name="nome_categoria" id="nome_categoria" value="{{old('nome_progetto',$category->nome_categoria)}}">
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection