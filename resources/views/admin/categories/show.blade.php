@extends('layouts.app')
@section('content')
<h2>{{$category->nome_categoria}}</h2>
<ul>
    
  @foreach ($category->projects as $project)
  {{$project->nome_progetto}}
  @endforeach
    
   
    
</ul>

@endsection