@extends('layouts.plantilla')

@section('title', $curso->name)

@section('content')
    {{-- <h1>Url con la variable <?php echo $curso?></h1> --}}
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar curso</a>
    <p><strong>Categoría: </strong>{{$curso->categoria}}</p>
    <p><strong>Descripción: </strong>{{$curso->description}}</p>

    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection