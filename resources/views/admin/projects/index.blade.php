@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        @foreach ($projects as $project)
        <div class="row">
            
            <li><a class="btn btn-primary text-white btn-sm" href="{{route('admin.projects.show', $project->id)}}" title="View Post">{{$project->nome_progetto}}</a></li>
            @endforeach
        </div>
    </div>
@endsection