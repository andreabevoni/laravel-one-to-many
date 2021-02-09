@extends('layouts.main-layout')

@section('section')

  <a href="{{route('emp-index')}}">Torna a indice</a>

  <h2>Inserisci un nuovo impiegato</h2>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

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
