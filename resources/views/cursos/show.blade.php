@extends('layouts.plantilla')

@section('title', 'Página con variable')

@section('content')
    {{-- <h1>Url con la variable <?php echo $curso?></h1> --}}
    <h1>Url con la variable {{$curso}}</h1>
@endsection