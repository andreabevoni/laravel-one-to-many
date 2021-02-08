@extends('layouts.main-layout')

@section('section')

  <a href="{{route('typo-index')}}">Torna a indice</a>

  <h2>Inserisci una nuova tipologia</h2>

  <form action="{{route('typo-store')}}" method="post">

    @csrf
    @method('POST')

    <label for="name">Nome</label>
    <input type="text" name="name" value="">

    <br>

    <label for="description">Descrizione</label>
    <input type="text" name="description" value="">

    <br>
    <br>

    Compiti collegati:
    <br>
    @foreach ($tasks as $task)
      <input type="checkbox" name="tasks[]" value="{{$task -> id}}">
      {{$task -> title}}
      <br>
    @endforeach

    <br>
    <input type="submit" name="" value="Invia">

  </form>

@endsection
