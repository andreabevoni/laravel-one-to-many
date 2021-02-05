@extends('layouts.main-layout')

@section('section')

  <a href="{{route('home')}}">Torna alla homepage</a>

  <h1>LISTA TIPOLOGIE</h1>

    <ul>
      @foreach ($typologies as $typology)
        <li>
          <a href="{{route('typo-show', $typology -> id)}}">
            {{$typology -> name}}
          </a>
        </li>
      @endforeach
    </ul>

@endsection
