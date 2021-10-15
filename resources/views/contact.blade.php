@extends('layout')

@section('title','Contact')
    
@section('titlePrincipal')
    <h1>CONTACT</h1>

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"><br>
       {!! $errors->first('name', '<small>:message</small>') !!}<br>       

        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"><br>
         {{$errors->first('email')}}<br>

        <input type="text" name="subject" placeholder="Asunto" value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small>') !!}<br>

        <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea><br>
        {!! $errors->first('content','<small>:message</small>') !!}<br>
       <input type="text" >
        <button>Enviar</button>
    </form>
@endsection