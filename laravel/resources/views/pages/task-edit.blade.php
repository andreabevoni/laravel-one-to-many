@extends('layouts.main-layout')

@section('section')

  <a href="{{route('task-index')}}">Torna a indice</a>

  <h2>Modifica compito</h2>

  <form action="{{route('task-update', $task -> id)}}" method="post">

    @csrf
    @method('POST')

    <label for="title">Titolo</label>
    <input type="text" name="title" value="{{$task -> title}}">

    <br>

    <label for="description">Descrizioner</label>
    <input type="text" name="description" value="{{$task -> description}}">

    <br>

    <label for="priority">Prioritá (da 1 a 5)</label>
    <input type="text" name="priority" value="{{$task -> priority}}">

    <br>

    <select class="" name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{$employee -> id}}"

          @if ($employee -> id === $task -> employee_id)
            selected
          @endif

        >{{$employee -> name}}</option>
      @endforeach
    </select>

    <br>
    <br>

    Tipologie collegate:
    <br>
    @foreach ($typologies as $typology)
      <input type="checkbox" name="typologies[]" value="{{$typology -> id}}"

        @if ($task -> typologies -> contains($typology -> id))
          checked
        @endif

      >
      {{$typology -> name}}
      <br>
    @endforeach

    <br>

    <input type="submit" name="" value="Invia">

  </form>

@endsection
