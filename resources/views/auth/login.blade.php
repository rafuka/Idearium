@extends('layouts.master')

@section('title')
  Log In | Idearium
@stop

@section('header')
  <h1>Idearium</h1>
@stop

@section('main')
    <form action="/login" method="POST" class="form-horizontal" id="login-form">
      <fieldset>
        <legend>Log In</legend>
        {{ csrf_field() }}
        <div class="form-group">
          <label for="email" class="col-md-3 control-label">e-mail</label>
          <div class="col-md-9">
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"/><div class="error">{{ $errors->first('email') }}</div>
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-md-3 control-label">password</label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="password" id="password" value=""/><div class="error">{{ $errors->first('password') }}</div>
          </div>
        </div>
       
        <button type="submit" class="btn btn-primary">Log In!</button>
      </fieldset>
    </form>

  <p class="form-link">New user? <a href="/register">Register!</a></p>
@stop

@section('footer')
  <p>&copy; Idearium 2016</p>
@stop
