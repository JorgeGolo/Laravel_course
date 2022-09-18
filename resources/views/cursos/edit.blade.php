@extends('layouts.plantilla')

@section('title', 'Editar curso')

@section('content')
    <h1>Edición de curso</h1>
    <form action="{{route('cursos.update',$curso)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>

        @error('name')
        <br>
            <small>*{{$message}}</small>
        <br>
    @enderror 
        <br>

        <label>
            Descripción:<br>
            <textarea name="description" rows="5">{{old('description',$curso->description)}}</textarea>
        </label>

        @error('description')
        <br>
            <small>*{{$message}}</small>
        <br>
    @enderror 
        <br>

        <label>
            Categoría:<br>
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror 

        <br>
        <button type="submit">Actualizar curso</button>
    
    </form>
   
@endsection