<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- Inizializzazione larghezza device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- File css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Welcome Molisana</title>
  </head>
  <body>
    {{-- CONTAINER --}}
    <div class="container">
      <header>
        <div class="header-background">
          <div class="header-content">
            <img class="header-content-logo" src="{{ asset('img/logo.png') }}" alt="tag">
              <ul class="header-content-menu">
                <li>Home</li>
                <li>Prodotti</li>
                <li>News</li>
              </ul>
          </div>
        </div>


      </header>

      {{-- MAIN-CONTENT --}}
      @yield('main-content')



      <footer>
        <div class="footer-background">
          <div class="footer-content">
            <div class="footer-content-col-1">
            <img class="footer-content-logo" src="{{ asset('img/logo.png') }}" alt="tag">
            </div>
            <div class="footer-content-col-2">

            </div>
            <div class="footer-content-col-3">

            </div>

          </div>
        </div>
      </footer>
    </div>

  </body>
</html>
