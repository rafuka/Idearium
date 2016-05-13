<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <title>@yield('title', 'Idearium')</title>
</head>
<body>
  @if (Session::has('message'))
    <div class="flash-msg">{{ Session::get('message') }}</div>
  @endif
  <header>
    <nav id="leftnav">
      <ul>
        <li><a href="/">New Note</a></li>
        <li><a href="/archive">Archive</a></li>
      </ul>
    </nav>
    <h1>Idearium</h1>
    <nav id="rightnav">
      <ul>
        <li><a href="/logout">Log Out</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="content-wrap">
      @yield('main')
    </div>
  </main>
  <footer>
    @yield('footer')
  </footer>
</body>
</html>
