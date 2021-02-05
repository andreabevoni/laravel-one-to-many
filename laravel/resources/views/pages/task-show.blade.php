@extends('layouts.main-layout')

@section('section')

  <h3>Titolo: {{$task -> title}}</h3>

  <h3>Descrizione: {{$task -> description}}</h3>

  <h3>Livello di prioritá: {{$task -> priority}}</h3>

  <h3>Svolto da: {{$task -> employee -> name}} {{$task -> employee -> lastname}}</h3>

@endsection
