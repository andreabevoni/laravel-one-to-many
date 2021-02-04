@extends('layouts.main-layout')

@section('section')

  <h2>Inserisci un nuovo impiegato</h2>

  <form action="{{route('emp-store')}}" method="post">

    @csrf
    @method('POST')

    <label for="name">Nome</label>
    <input type="text" name="name" value="">

    <br>

    <label for="lastname">Cognome</label>
    <input type="text" name="lastname" value="">

    <br>

    <label for="dateOfBirth">Data di nascita</label>
    <input type="text" name="dateOfBirth" value="">

    <br>

    <input type="submit" name="" value="Invia">

  </form>

@endsection
