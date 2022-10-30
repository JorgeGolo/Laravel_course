@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Déjanos un mensaje</h1>

<form action="{{route('contactanos.store')}}" method="POST">
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>

    @error('name')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label>
        Correo:
        <br>
        <input type="mail" name="email">
    </label>
    <br>

    @error('email')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <label>
        Mensaje:
        <br>
        <textarea name="mensaje" rows="4"></textarea>    
        </label>
    <br>
    
    @error('mensaje')
        <p><strong>{{$message}}</strong></p>
    @enderror

    <button type="submit">Enviar mensaje</button>

</form>

@if (session('info'))
    <script>
        alert("{{session('info')}}")
    </script>
@endif


@endsection