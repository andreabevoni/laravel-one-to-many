@extends('layouts.main-layout')

@section('section')

  <h1>LISTA COMPITI</h1>

    <ul>
      @foreach ($tasks as $task)
        <li>
          {{$task -> title}}
          ({{$task -> employee -> name}})
        </li>
      @endforeach
    </ul>

@endsection
