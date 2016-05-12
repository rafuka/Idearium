@extends('layouts.master')

@section('title')
  Register | Idearium
@stop

@section('header')
  <h1>Idearium</h1>
@stop

@section('main')
  <div class="form-wrap">
    <form action="/register" method="POST">
      {{ csrf_field() }}
      <label for="email">e-mail</label><br>
      <input type="email" name="email" id="email" value="{{ old('email') }}"/><br>
      <label for="password">password</label><br>
      <input type="password" name="password" id="password" /><br>
      <label for="password">repeat password</label><br>
      <input type="password" name="passrepeat" id="passrepeat" /><br>
      <input type="submit" value="Register!"/>
    </form>
  </div>
  <p>Already have an account? <a href="/">Log In!</a></p>
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
