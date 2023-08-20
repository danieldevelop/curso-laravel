@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    {{-- tambien podemos hacerlo así <?php /* echo $curso; */ ?>, pero no es recomendable --}}
    <h1>!Bienvenido al curso de {{ $curso }}</h1> 
@endsection