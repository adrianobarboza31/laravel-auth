@extends('layouts.app')
@section('content')
<div class="container">
  <h1>compila per aggiungere</h1>
  <form action="{{ route('admin.projects.update',$project->id) }}" method="POST">
    @csrf
@method('PUT')
    <label for="nome_progetto">nome_progetto</label>
    <input type="text" name="nome_progetto" id="nome_progetto" value="{{old('nome_progetto',$project->nome_progetto)}}">
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection