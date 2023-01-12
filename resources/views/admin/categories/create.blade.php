@extends('layouts.app')
@section('content')
<div class="container">

  <h1>compila per aggiungere</h1>
  <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nome_categoria">nome categoria</label>
    <input type="text" name="nome_categoria" id="nome_categoria">

        
   
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection