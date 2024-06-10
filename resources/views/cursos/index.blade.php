@extends('layouts.plantilla')

@section('title', 'Cursos')
    
@section('content')

    <h1>Cursos Disponibles:</h1>

    <a href="{{route('cursos.create')}}">Crear un curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection