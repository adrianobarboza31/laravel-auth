@extends('layouts.app')
@section('content')
<div class="container">
  <h1>compila per aggiungere</h1>
  <form action="{{ route('admin.projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
@method('PUT')
    <label for="nome_progetto">nome_progetto</label>
    <input type="text" name="nome_progetto" id="nome_progetto" value="{{old('nome_progetto',$project->nome_progetto)}}">
    <label for="cover_image">carica immagine</label>
    <input type="file" name="cover_image" id="cover_image">
    @foreach ($technologies as $tag)
    <div class="form-check form-check-inline">

        @if (old("technologies"))
            <input type="checkbox" class="form-check-input" id="{{$tag->nome_technology}}" name="technologies[]" value="{{$tag->id}}" {{in_array( $tag->id, old("technologies", []) ) ? 'checked' : ''}}>
        @else
            <input type="checkbox" class="form-check-input" id="{{$tag->nome_technology}}" name="technologies[]" value="{{$tag->id}}" {{$project->technologies->contains($tag) ? 'checked' : ''}}>
        @endif
        <label class="form-check-label" for="{{$tag->id}}">{{$tag->nome_technology}}</label>
    </div>
@endforeach
    <button type="submit">Aggiungi</button>
</form>
</div>
@endsection