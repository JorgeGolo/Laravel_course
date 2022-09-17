@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('content')
    <h1>Edición de curso</h1>
    <form action="{{route('cursos.update',$curso)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>

        <label>
            Descripción:<br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label>
        <br>

        <label>
            Categoría:<br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">Actualizar curso</button>
    
    </form>
   
@endsection