@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <a class="btn btn-success" href="{{route('admin.categories.create')}}">Crea nuova categoria</a>
        @foreach ($categories as $category)
        <div class="row">
            
            <li><a class="btn btn-primary text-white btn-sm" href="{{route('admin.categories.show', $category->id)}}" title="View Post">{{$category->nome_categoria}}</a></li>
            <td> <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$category->nome_categoria}}"><i class="fa-solid fa-trash-can"></i></button>
             </form>
            </td>
             <p><a href="{{ route('admin.categories.edit',$category->id) }}">modifica</a></p>
            @endforeach
        </div>
    </div>
    @include('profile.partials.admin.modal-delete')
@endsection