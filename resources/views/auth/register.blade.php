@extends('layouts.master')

@section('title')
  Register | Idearium
@stop

@section('header')
  <h1>Idearium</h1>
@stop

@section('main')

    <form action="/register" method="POST" class="form-horizontal">
      <fieldset>
        <legend>Register</legend>
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name" class="col-md-3 control-label">Name:</label>
          <div class="col-md-9">
            <input type="text" class="form-control" name="name" id="name" value ="{{ old('name') }}" /><div class="error">{{ $errors->first('name') }}</div>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-md-3 control-label">e-mail:</label>
          <div class="col-md-9">
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"/><div class="error">{{ $errors->first('email') }}</div>
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-md-3 control-label">Password:</label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="password" id="password" /><div class="error">{{ $errors->first('password') }}</div>
          </div>
        </div>

        <div class="form-group">
          <label for="password_confirmation" class="col-md-3 control-label">Repeat Password:</label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"/><div class="error">{{ $errors->first('password_confirmation') }}</div>
          </div>
        </div>

        <button type="submit" class="btn btn-success">Register!</button>
      </fieldset>
    </form>

  <p class="form-link">Already have an account? <a href="/login">Log In!</a></p>
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
