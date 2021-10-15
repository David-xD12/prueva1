@extends('layout')

@section('title','Portfolio')

@section('titlePrincipal')
    <h1>PORTFOLIO</h1>

    <ul>
        @forelse ($proyecto as $proyectoitem)
        <li>{{ $proyectoitem['title']}}</li>
        @empty
        <li>No hay proyecto a mostrar</li> 
        @endforelse
    </ul>
@endsection