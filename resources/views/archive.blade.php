@extends('layouts.master')

@section('title')
  Archive | Idearium
@stop

@section('main')
  @foreach($notes as $note)
    <div class="note-wrap">
      <p class="note-view">{{ $note->text }}</p>
      <a href="/edit/{{ $note->id }}">Edit</a>
      <a href="/delete/{{ $note->id }}">Delete</a>
    </div>
  @endforeach
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
