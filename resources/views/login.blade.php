@extends('layouts.master')

@section('title')
  Log In | Idearium
@stop

@section('header')
  <h1>Idearium</h1>
@stop

@section('main')
  <div class="form-wrap">
    <form action="/" method="POST">
      {{ csrf_field() }}
      <label for="email">e-mail</label><br>
      <input type="email" name="email" id="email" value="{{ old('email') }}"/><div class="error">{{ $errors->first('email') }}</div><br>
      <label for="password">password</label><br>
      <input type="password" name="password" id="password" value="" /><div class="error">{{ $errors->first('password') }}</div><br>
      <input type="submit" value="Log In!" />
    </form>
  </div>
  <p>New user? <a href="/register">Register!</a></p>
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
