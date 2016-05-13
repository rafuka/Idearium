<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Idearium')</title>
</head>
<body>
  @if (Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif
  <header>
    @yield('header')
  </header>
  <main>
    @yield('main')
  </main>
  <footer>
    @yield('footer')
  </footer>
</body>
</html>
