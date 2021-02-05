@extends('layouts.main-layout')

@section('section')

  <a href="{{route('typo-index')}}">Torna a indice</a>

  <h3>Nome: {{$typology -> name}}</h3>

  <h3>Descrizione: {{$typology -> description}}</h3>

  <h3>Compiti collegati:</h3>
  <ul>
    @foreach ($typology -> tasks as $task)
      <li>
        <a href="{{route('task-show', $task -> id)}}">
          {{$task -> title}}
        </a>
      </li>
    @endforeach
  </ul>

@endsection
