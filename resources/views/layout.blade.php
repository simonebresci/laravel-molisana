<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    {{-- File css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Welcome Molisana</title>
  </head>
  <body>
    {{-- CONTAINER --}}
    <div class="container">
      <header>
        Ciao sono header!
      </header>

      {{-- CONTENT --}}
      @yield('content')

      <footer>
        Ciao sono footer!
      </footer>
    </div>

  </body>
</html>
