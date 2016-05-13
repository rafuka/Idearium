@extends('layouts.master')

@section('title')
  Notebook | Idearium
@stop

@section('main')
  @if (isset($note))
    <form method="POST" action="/edit" id="textform">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $note->id }}" />
      <textarea type="textarea" name="text" id="text" form="textform">{{ $note->text }}</textarea><br>
      <input type="submit" value="Save!" id="submit" />
    </form>
  @else
    <p>Sorry, the note you're trying to edit was'nt found!</p>
  @endif
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
