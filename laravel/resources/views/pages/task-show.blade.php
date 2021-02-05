@extends('layouts.main-layout')

@section('section')

  <a href="{{route('task-index')}}">Torna a indice</a>

  <h3>Titolo: {{$task -> title}}</h3>

  <h3>Descrizione: {{$task -> description}}</h3>

  <h3>Livello di prioritá: {{$task -> priority}}</h3>

  <h3>
    Svolto da:
    <a href="{{route('emp-show', $task -> employee -> id)}}">
      {{$task -> employee -> name}} {{$task -> employee -> lastname}}
    </a>
  </h3>

  <h3>Tipologie collegate:</h3>
  <ul>
    @foreach ($task -> typologies as $typology)
      <li>
        <a href="{{route('typo-show', $typology -> id)}}">
          {{$typology -> name}}
        </a>
      </li>
    @endforeach
  </ul>

@endsection
