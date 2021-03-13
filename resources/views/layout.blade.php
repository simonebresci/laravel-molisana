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
                <li class="@php if($idxMenuHeader===1){echo "active";} @endphp">
                  <a href="/">Home</a>
                </li>
                <li class="@php if($idxMenuHeader===2){echo "active";} @endphp">
                  <a href="/product/">Prodotti</a>
                </li>
                <li class="@php if($idxMenuHeader===3){echo "active";} @endphp">
                  <a href="/news">News</a>
                </li>
                {{-- <li><a href="/product/">Prodotti</a></li>
                <li><a href="/news">News</a></li> --}}
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
              <li>ragione sociale: la molisana s.p.a.</li>
              <li>sede legale: contrada colle delle api, 100/a - 86100 - campobasso (cb)</li>
              <li>pec: lamolisana@pec.it</li>
              <li>tel: +39 0874 4981</li>
              <li>fax: +39 0874 629584</li>
              <li>info@lamolisana.it</li>
              <li>per segnalazioni scrivere a:</li>
              <li>per contattare l'area commerciale:</li>
              <li>commerciale@lamolisana.it</li>
              <li>per contattare l'area export:</li>
              <li>export@lamolisana.it</li>
              <li>dati aziendali: leggi di più</li>
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
