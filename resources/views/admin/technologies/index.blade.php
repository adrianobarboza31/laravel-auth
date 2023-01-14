@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <a class="btn btn-success" href="{{route('admin.technologies.create')}}">Crea nuova categoria</a>
        @foreach ($technolgies as $technology)
        <div class="row">
            
            <li><a class="btn btn-primary text-white btn-sm" href="{{route('admin.technologies.show', $technology->id)}}" title="View Post">{{$technology->nome_technology}}</a></li>
            <td> <form action="{{route('admin.technologies.destroy', $technology->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$technology->nome_technology}}"><i class="fa-solid fa-trash-can"></i></button>
             </form>
            </td>
             <p><a href="{{ route('admin.technologies.edit',$technology->id) }}">modifica</a></p>
            @endforeach
        </div>
    </div>
    @include('profile.partials.admin.modal-delete')
@endsection