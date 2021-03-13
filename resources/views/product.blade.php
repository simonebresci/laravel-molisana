@extends('layout')

@section('main-content')
  <div class="main-background-2">

    <div class="main-content">

      {{-- Controlla presenza idProduct nel link pagina --}}
      @if(!empty($idProduct))

        {{-- Mostra risultati solo se id è una posizione valida --}}
        @if($idProduct > 0 AND $idProduct <= count($pastaArray))


          @php
            // Trasforma da indice "umano" ad indice array
            $idProduct -= 1;
          @endphp

          {{-- Dettagli prodotto --}}
          <div class="pasta-details">
            <h2> {{$pastaArray[$idProduct]["titolo"]}} </h2>
            <img class="pasta-details-img-h"src="{{$pastaArray[$idProduct]["src-h"]}}" alt="" >
            <img class="pasta-details-img-p"src="{{$pastaArray[$idProduct]["src-p"]}}" alt="" >
            <div class="pasta-details-text">{!! $pastaArray[$idProduct]["descrizione"] !!}</div>
          </div>
          {{-- /Dettagli prodotto --}}
        @else
          {{-- Caso prodotto non esistente --}}
          <h2>Prodotto non esistente</h2>
        @endif

      @else
        {{-- Caso nessun prodotto selezionato --}}
        <h2>Nessun prodotto selezionato</h2>
      @endif
    </div>
  </div>
@endsection
