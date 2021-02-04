@extends('layouts.main-layout')

@section('section')

  <h3>Nome: {{$employee -> name}}</h3>

  <h3>Cognome: {{$employee -> lastname}}</h3>

  <h3>Data di nascita: {{$employee -> dateOfBirth}}</h3>

  <h3>Compiti svolti: </h3>
  <ul>
    @foreach ($employee -> tasks as $task)
      <li>
        {{$task -> title}}
      </li>
    @endforeach
  </ul>

@endsection
