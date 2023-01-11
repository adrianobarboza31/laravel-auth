@extends('layouts.app')
@section('content')
<div class="container">
  <h1>compila per aggiungere</h1>
  <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nome_progetto">nome_progetto</label>
    <input type="text" name="nome_progetto" id="nome_progetto">
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection