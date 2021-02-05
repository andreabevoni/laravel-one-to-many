@extends('layouts.main-layout')

@section('section')

  <a href="{{route('home')}}">Torna alla homepage</a>

  <h1>LISTA DIPENDENTI</h1>

  <a href="{{route('emp-create')}}">Crea nuovo dipendente</a>

    <ul>
      @foreach ($employees as $employee)
        <li>
          <a href="{{route('emp-show', $employee -> id)}}">
            {{$employee -> name}}
          </a>

          <a href="{{route('emp-edit', $employee -> id)}}">EDIT</a>

        </li>
      @endforeach
    </ul>

@endsection
