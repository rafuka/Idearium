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
    <textarea type="textarea" name="text" id="text" form="textform" placeholder="Write a New note..."></textarea><br>
    <input type="submit" value="Save!" id="submit"/>
  </form>
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
