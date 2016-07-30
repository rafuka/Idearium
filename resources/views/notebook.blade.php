@extends('layouts.master')

@section('title')
  Notebook | Idearium
@stop

@section('header')
  <h1>Idearium</h1>
@stop

@section('main')
  <form method="POST" action="/" id="textform">
    {{ csrf_field() }}
    <textarea type="textarea" class="form-control" name="text" id="text" form="textform" placeholder="Write a New note..."></textarea><br>
    <button type="submit" class="btn btn-primary">Save!</button>
  </form>
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
