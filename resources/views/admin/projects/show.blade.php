@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
          <p> {{$project->nome_progetto}}
          </p> 
          <img src="{{ asset('storage/' . $project->cover_image) }}">

        </div>
    </div>
@endsection