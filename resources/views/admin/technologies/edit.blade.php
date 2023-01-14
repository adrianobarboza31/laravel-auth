@extends('layouts.app')
@section('content')
<div class="container">
  <h1>compila per aggiungere</h1>
  <form action="{{ route('admin.technologies.update',$technology->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
@method('PUT')
    <label for="nome_technology">nome categoria</label>
    <input type="text" name="nome_technology" id="nome_technology" value="{{old('nome_technology',$technology->nome_technology)}}">
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection