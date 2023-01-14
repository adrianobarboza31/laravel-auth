@extends('layouts.app')
@section('content')
<div class="container">

  <h1>compila per aggiungere</h1>
  <form action="{{ route('admin.technologies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="nome_technology">nome tecnologia</label>
    <input type="text" name="nome_technology" id="nome_technology">

        
   
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection