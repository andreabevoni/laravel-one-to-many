@extends('layouts.main-layout')

@section('section')

  <a href="{{route('typo-index')}}">Torna a indice</a>

  <h2>Modifica tipologia</h2>

  <form action="{{route('typo-update', $typology -> id)}}" method="post">

    @csrf
    @method('POST')

    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$typology -> name}}">

    <br>

    <label for="description">Descrizione</label>
    <input type="text" name="description" value="{{$typology -> description}}">

    <br>
    <br>

    Compiti collegati:
    <br>
    @foreach ($tasks as $task)
      <input type="checkbox" name="tasks[]" value="{{$task -> id}}"

        @if ($typology -> tasks -> contains($task -> id))
          checked
        @endif

      >
      {{$task -> title}}
      <br>
    @endforeach

    <br>

    <input type="submit" name="" value="Invia">

  </form>

@endsection
