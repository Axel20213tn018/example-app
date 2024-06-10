@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf

        <label for="name">
            Nombre:
            <br>
            <input type="text" name="name" id="name" value="{{old('name')}}">
        </label>

        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="email">
            Correo:
            <br>
            <input type="text" name="correo" id="email" value="{{old('correo')}}">
        </label>

        <br>

        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="message">
            Mensaje:
            <br>
            <textarea name="mensaje" id="message" rows="4">{{old('mensaje')}}</textarea>
        </label>

        <br>

        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit">
            Enviar Mensaje
        </button>
    </form>

    @if (session('info'))
        
        <script>
            alert("{{session('info')}}")
        </script>

    @endif
    
@endsection