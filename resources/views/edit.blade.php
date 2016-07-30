@extends('layouts.master')

@section('title')
  Notebook | Idearium
@stop

@section('main')
  @if (isset($note))
    <form method="POST" action="/edit" id="textform">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $note->id }}" />
      <textarea type="textarea" class="form-control" name="text" id="text" form="textform">{{ $note->text }}</textarea><br>
      <button type="submit" class="btn btn-primary">Save!</button>
    </form>
  @else
    <p>Sorry, the note you're trying to edit was'nt found!</p>
  @endif
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
