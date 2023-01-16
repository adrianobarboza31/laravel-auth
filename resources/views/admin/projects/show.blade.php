@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
          <p> {{$project->nome_progetto}}
          </p> 
          <p>Category {{$project->category->nome_categoria}}</p>
          <p>
            @foreach ($project->technologies as $technology)
         <span>{{$technology->nome_technology}}</span>
  
            @endforeach</p>
          {{-- <img src="{{ asset('storage/' . $project->cover_image) }}"> --}}
        
        </div>
    </div>
@endsection