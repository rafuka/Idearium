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
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value ="{{ old('name') }}" /><div class="error">{{ $errors->first('name') }}</div><br>

      <label for="email">e-mail:</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}"/><div class="error">{{ $errors->first('email') }}</div><br>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" /><div class="error">{{ $errors->first('password') }}</div><br>

      <label for="password_confirmation">Repeat Password:</label>
      <input type="password" name="password_confirmation" id="password_confirmation"/><div class="error">{{ $errors->first('password_confirmation') }}</div><br>

      <input type="submit" value="Register!"/>
    </form>
  </div>
  <p>Already have an account? <a href="/login">Log In!</a></p>
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
