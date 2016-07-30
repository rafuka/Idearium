@extends('layouts.master')

@section('title')
  Archive | Idearium
@stop

@section('main')
  @foreach($notes as $note)
    <div class="note-wrap col-xs-12 col-md-6 col-lg-4">
    	<div class="panel panel-primary">
    		<div class="panel-heading">
    			<h3 class="panel-title">Created at: {{ $note->created_at }}</h3>
    		</div>
    		<div class="panel-body">
      		<p class="note-view">{{ $note->text }}</p>
      	</div>
      	<div class="panel-footer">
      		<a href="/edit/{{ $note->id }}">Edit</a>
      		<a class="dlt-link" href="/delete/{{ $note->id }}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
      	</div>
      </div>
    </div>
  @endforeach
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
