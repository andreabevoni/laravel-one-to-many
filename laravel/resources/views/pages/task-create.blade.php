@extends('layouts.main-layout')

@section('section')

  <a href="{{route('task-index')}}">Torna a indice</a>

  <h2>Inserisci un nuovo compito</h2>

  <form action="{{route('task-store')}}" method="post">

    @csrf
    @method('POST')

    <label for="title">Titolo</label>
    <input type="text" name="title" value="">

    <br>

    <label for="description">Descrizione</label>
    <input type="text" name="description" value="">

    <br>

    <label for="priority">Prioritá (da 1 a 5)</label>
    <input type="text" name="priority" value="">

    <br>
    <br>

    <select name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{$employee -> id}}">{{$employee -> name}}</option>
      @endforeach
    </select>

    <br>
    <br>

    Tipologie collegate:
    <br>
    @foreach ($typologies as $typology)
      <input type="checkbox" name="typologies[]" value="{{$typology -> id}}">
      {{$typology -> name}}
      <br>
    @endforeach

    <input type="submit" name="" value="Invia">

  </form>

@endsection
