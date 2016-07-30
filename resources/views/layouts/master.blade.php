<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}" />

  <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>@yield('title', 'Idearium')</title>
</head>
<body>
  @if (Session::has('message'))
    <div class="flash-msg alert alert-dismissable alert-success">
      {{ Session::get('message') }}
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
  @endif
  <header>
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>    
        <a class="navbar-brand" href="/">Idearium</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
        @if (\Auth::check())
            <li><a href="/archive">Archive</a></li>
            <li><a href="/">New Note</a></li>
        @endif
        </ul>
        <ul class="nav navbar-nav navbar-right">
        @if (\Auth::check())
          <li><a href="/logout">Log Out</a></li>
        @endif
        </ul>
      </div>
    </nav>
  <!--
    @if (\Auth::check())
    <nav id="leftnav">
      <ul>
        <li><a href="/">New Note</a></li>
        <li><a href="/archive">Archive</a></li>
      </ul>
    </nav>
    @endif
    <h1>Idearium</h1>
    <nav id="rightnav">
      <ul>
        <li><a href="/logout">Log Out</a></li>
      </ul>
    </nav> -->
  </header>
  <main class="container">
    <div class="content-wrap row">
      @yield('main')
    </div>
  </main>
  <footer>
    @yield('footer')
  </footer>
</body>
</html>
