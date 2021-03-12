@extends('layout')

@section('main-content')
  <div class="main-background">

    <div class="main-content">
      <div class="main-content-section">
        <h2>LE LUNGHE</h2>
        @foreach($pastaArray as $pasta)
          @if($pasta["tipo"]==="lunga")
            <div class="pasta">
              {{-- Link pagina prodotto --}}
              @php
                $link = "/product/" . $pasta["titolo"];
              @endphp

              <a href="{{$link}}">
                {{-- Immagine --}}
                <img class="pasta-img"src="{{$pasta["src"]}}" alt="" >
              </a>

            </div>
          @endif
        @endforeach
      </div>
      <div class="main-content-section">
        <h2>LE CORTE</h2>
        @foreach($pastaArray as $pasta)
          @if($pasta["tipo"]==="corta")
            <div class="pasta">
              {{-- Link pagina prodotto --}}
              @php
                $link = "/product/" . $pasta["titolo"];
              @endphp

              <a href="{{$link}}">
                {{-- Immagine --}}
                <img class="pasta-img"src="{{$pasta["src"]}}" alt="" >
              </a>

            </div>
          @endif
        @endforeach
      </div>
      <div class="main-content-section">
        <h2>LE CORTISSIME</h2>
        @foreach($pastaArray as $pasta)
          @if($pasta["tipo"]==="cortissima")
            <div class="pasta">
              {{-- Link pagina prodotto --}}
              @php
                $link = "/product/" . $pasta["titolo"];
              @endphp

              <a href="{{$link}}">
                {{-- Immagine --}}
                <img class="pasta-img"src="{{$pasta["src"]}}" alt="" >
              </a>

            </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
@endsection
