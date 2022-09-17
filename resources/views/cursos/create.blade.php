@extends('layouts.plantilla')

@section('title', 'Insertar formulario')

@section('content')
    <h1>Inserción de formulario</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Descripción:<br>
            <textarea name="description" rows="5"></textarea>
        </label>
        <br>

        <label>
            Categoría:<br>
            <input type="text" name="categoria">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    
    </form>
   
@endsection