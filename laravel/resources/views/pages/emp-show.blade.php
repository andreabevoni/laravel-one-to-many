@extends('layouts.main-layout')

@section('section')

  <a href="{{route('emp-index')}}">Torna a indice</a>

  <h3>Nome: {{$employee -> name}}</h3>

  <h3>Cognome: {{$employee -> lastname}}</h3>

  <h3>Data di nascita: {{$employee -> dateOfBirth}}</h3>

  <h3>Compiti svolti: </h3>
  <ul>
    @foreach ($employee -> tasks as $task)
      <li>
        <a href="{{route('task-show', $task -> id)}}">
          {{$task -> title}}
        </a>
      </li>
    @endforeach
  </ul>

@endsection
