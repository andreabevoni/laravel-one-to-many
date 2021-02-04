@extends('layouts.main-layout')

@section('section')

  <h1>LISTA COMPITI</h1>

    <ul>
      @foreach ($tasks as $task)
        <li>
          <a href="{{route('task-show', $task -> id)}}">
            {{$task -> title}}
          </a>
          ({{$task -> employee -> name}})
        </li>
      @endforeach
    </ul>

@endsection
