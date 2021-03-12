@extends('layout')

@section('main-content')
  <div class="main-background-2">

    <div class="main-content">

      {{-- {{ $idProduct}} --}}
      {{-- Prodotto selezionato --}}
      @foreach($pastaArray as $pasta)
          @if($pasta["titolo"] === $idProduct)
            <div class="pasta-details">
              <h2> {{$pasta["titolo"]}} </h2>
              <img class="pasta-details-img-h"src="{{$pasta["src-h"]}}" alt="" >
              <img class="pasta-details-img-p"src="{{$pasta["src-p"]}}" alt="" >
              <div class="pasta-details-text">{!! $pasta["descrizione"] !!}</div>
            </div>
          @endif
      @endforeach
      {{-- /Prodotto selezionato --}}

    </div>
  </div>

  </body>
</html>
@endsection('content')
