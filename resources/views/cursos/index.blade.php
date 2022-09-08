@extends('layouts.plantilla')

@section('title', 'Página de cursos')

@section('content')
    <h1>Bienvenido a la página de cursos</h1>
    
    {{-- <a href="cursos/create">Crear curso</a> --}}
    
    <a href="{{route('cursos.create')}}">Crear curso</a>

    <ul>

        @foreach ($cursos as $curso)

            {{-- <li>{{$curso->name}}</li> --}}
            {{-- <li>{{route('cursos.show')}}</li>  --}}
            {{-- <li>{{route('cursos.show',$curso->id)}}</li>  --}}

            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a> 
            </li>

        @endforeach

    </ul>

    {{$cursos->links()}}

@endsection
