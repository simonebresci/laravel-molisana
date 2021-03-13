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
            <ul class="molisana-contatti">
              <li>Ragione sociale</li>
              <li>RAGIONE SOCIALE: LA MOLISANA S.P.A.</li>
              <li>SEDE LEGALE: CONTRADA COLLE DELLE API, 100/A - 86100 - CAMPOBASSO (CB)</li>
              <li>PEC: LAMOLISANA@PEC.IT</li>
              <li>TEL: +39 0874 4981</li>
              <li>FAX: +39 0874 629584</li>
              <li>INFO@LAMOLISANA.IT</li>
              <li>PER SEGNALAZIONI SCRIVERE A:</li>
              <li>PER CONTATTARE L'AREA COMMERCIALE:</li>
              <li>COMMERCIALE@LAMOLISANA.IT</li>
              <li>PER CONTATTARE L'AREA EXPORT:</li>
              <li>EXPORT@LAMOLISANA.IT</li>
              <li>DATI AZIENDALI: LEGGI DI PIÙ</li>
            </ul>
            </div>
            <div class="footer-content-col-2">
              <ul class="menu-pastificio">
                <li class="title">PASTIFICIO</li>
                <li><a href="#">Il Pastificio</a></li>
                <li><a href="#">Grano decorato a pietra</a></li>
                <li><a href="#">Il molise c'è</a></li>
                <li><a href="#">Filiera Integrata</a></li>
                <li><a href="#">100 anni di pasta</a></li>
                <li><a href="#">Sartoria della pasta</a></li>
                <li><a href="#">Spaghetto Quadrato</a></li>
                <li><a href="#">Le Persone</a></li>
              </ul>

              <ul class="menu-prodotti">
                <li class="title">PRODOTTI</a></li>
                <li><a href="#">Le Classiche</a></li>
                <li><a href="#">Le Integrali</a></li>
                <li><a href="#">Le Speciali</a></li>
                <li><a href="#">Le Biologiche</a></li>
                <li><a href="#">Le Gluten-Free</a></li>
                <li><a href="#">Le Extra di Lusso</a></li>
                <li><a href="#">Le Semole</a></li>
              </ul>
            </div>
            <div class="footer-content-col-3">
              <ul class="menu-collezioni">
                <li class="title">COLLEZIONE DA CHEF</a></li>
                <li><a href="#">Grandi Cucine</a></li>
                <li><a href="#">Biologiche</a></li>
                <li><a href="#">Quadrate</a></li>
              </ul>
            </div>

          </div>
        </div>
      </footer>
    </div>

  </body>
</html>
