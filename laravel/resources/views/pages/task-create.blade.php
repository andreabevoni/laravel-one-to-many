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

    <label for="description">Descrizioner</label>
    <input type="text" name="description" value="">

    <br>

    <label for="priority">Prioritá (da 1 a 5)</label>
    <input type="text" name="priority" value="">

    <br>

    <select class="" name="employee_id">
      @foreach ($employees as $employee)
        <option value="{{$employee -> id}}">{{$employee -> name}}</option>
      @endforeach
    </select>

    <input type="submit" name="" value="Invia">

  </form>

@endsection
