@extends('layout')

@section('main-content')
  <div class="main-background-2">

    <div class="main-content">

      @if(!empty($idProduct))
        @php
          $idProduct -= 1;
        @endphp

        <div class="pasta-details">
          <h2> {{$pastaArray[$idProduct]["titolo"]}} </h2>
          <img class="pasta-details-img-h"src="{{$pastaArray[$idProduct]["src-h"]}}" alt="" >
          <img class="pasta-details-img-p"src="{{$pastaArray[$idProduct]["src-p"]}}" alt="" >
          <div class="pasta-details-text">{!! $pastaArray[$idProduct]["descrizione"] !!}</div>
        </div>
      @endif
    </div>
  </div>

  </body>
</html>
@endsection
