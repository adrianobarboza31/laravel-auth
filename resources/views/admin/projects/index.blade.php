@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @foreach ($projects as $project)
        <div class="row">
            <td>{{$project->technologies && count($project->technologies) > 0 ? count($project->technologies) : 0}}</td>
            <li><a class="btn btn-primary text-white btn-sm" href="{{route('admin.projects.show', $project->id)}}" title="View Post">{{$project->nome_progetto}}</a></li>
            <td> <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$project->nome_progetto}}"><i class="fa-solid fa-trash-can"></i></button>
             </form>
            </td>
             <p><a href="{{ route('admin.projects.edit',$project->id) }}">modifica</a></p>
            @endforeach
        </div>
    </div>
    @include('profile.partials.admin.modal-delete')
@endsection