@extends('layouts.main-layout')

@section('section')

  <h1>LISTA COMPITI</h1>

  <a href="{{route('task-create')}}">Crea nuovo compito</a>

    <ul>
      @foreach ($tasks as $task)
        <li>
          <a href="{{route('task-show', $task -> id)}}">
            {{$task -> title}}
          </a>
          ({{$task -> employee -> name}})

          <a href="{{route('task-edit', $task -> id)}}">EDIT</a>
        </li>
      @endforeach
    </ul>

@endsection
