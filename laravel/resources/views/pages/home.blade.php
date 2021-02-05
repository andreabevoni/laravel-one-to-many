@extends('layouts.main-layout')

@section('section')

  <h1>DATABASE ONE TO MANY</h1>

  <a href="{{route('emp-index')}}">Vai a index dipendenti</a>

  <br>
  <br>


  <a href="{{route('task-index')}}">Vai a index compiti</a>

  <br>
  <br>

  <a href="{{route('typo-index')}}">Vai a index tipologie</a>

@endsection
