@extends('layouts.app')
@section('content')
<div class="container">
  <h1>compila per aggiungere</h1>
  <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nome_progetto">nome progetto</label>
    <input type="text" name="nome_progetto" id="nome_progetto">
    <label for="cover_image">carica immagine</label>
    <input type="file" name="cover_image" id="cover_image">
        
   
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection