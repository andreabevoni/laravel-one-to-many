@extends('layouts.main-layout')

@section('section')

  <h1>LISTA DIPENDENTI</h1>

  <a href="{{route('emp-create')}}">Crea nuovo dipendente</a>

    <ul>
      @foreach ($employees as $employee)
        <li>
          <a href="{{route('emp-show', $employee -> id)}}">
            {{$employee -> name}}
          </a>

          <ul>
            @foreach ($employee -> tasks as $task)
              <li>
                {{$task -> title}}
              </li>
            @endforeach
          </ul>

        </li>
      @endforeach
    </ul>

@endsection
