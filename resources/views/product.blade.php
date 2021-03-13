@extends('layout')

@section('main-content')
  <div class="main-background-2">

    <div class="main-content">

      @if(!empty($idProduct))

        @if($idProduct > 0 AND $idProduct <= count($pastaArray))

          @php
            $idProduct -= 1;
          @endphp

          <div class="pasta-details">
            <h2> {{$pastaArray[$idProduct]["titolo"]}} </h2>
            <img class="pasta-details-img-h"src="{{$pastaArray[$idProduct]["src-h"]}}" alt="" >
            <img class="pasta-details-img-p"src="{{$pastaArray[$idProduct]["src-p"]}}" alt="" >
            <div class="pasta-details-text">{!! $pastaArray[$idProduct]["descrizione"] !!}</div>
          </div>
        @else
          <h2>Prodotto non esistente</h2>
        @endif

      @else
        <h2>Nessun prodotto selezionato</h2>

      @endif
    </div>
  </div>

  </body>
</html>
@endsection
