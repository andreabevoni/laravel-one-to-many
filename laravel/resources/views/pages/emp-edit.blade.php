@extends('layouts.main-layout')

@section('section')

  <h2>Modifica impiegato</h2>

  <form action="{{route('emp-update', $employee -> id)}}" method="post">

    @csrf
    @method('POST')

    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$employee -> name}}">

    <br>

    <label for="lastname">Cognome</label>
    <input type="text" name="lastname" value="{{$employee -> lastname}}">

    <br>

    <label for="dateOfBirth">Data di nascita</label>
    <input type="text" name="dateOfBirth" value="{{$employee -> dateOfBirth}}">

    <br>

    <input type="submit" name="" value="Invia">

  </form>

@endsection
