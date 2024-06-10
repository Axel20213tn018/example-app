@extends('layouts.plantilla')

@section('title', 'Crear Curso')
    
@section('content')
    <h1>Crear un curso</h1>
    <a href="{{route('cursos.index')}}">Volver</a>
    <form action="{{route('cursos.store')}}" method="POST"> @csrf
        <label for="name">
            Nombre:
            <br>
            <input type="text" name="name", id="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror

        <br>

        <label for="slug">
            Slug:
            <br>
            <input type="text" name="slug", id="slug" value="{{old('slug')}}">
        </label>
        @error('slug')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror

        <br>

        <label for="description">
            Descripcion:
            <br>
            <textarea name="descripcion" id="description" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>

        <label for="category">
            Categoria:
            <br>
            <input type="text" name="categoria" id="category" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <span>*{{$message}}</span>
            <br>
        @enderror
        <br>
        <button type="submit" >Crear Curso</button>
    </form>
@endsection