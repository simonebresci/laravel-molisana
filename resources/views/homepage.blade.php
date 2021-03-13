@extends('layout')

@section('main-content')
  <div class="main-background">
    <div class="main-content">
      {{-- SEZIONE PASTA LUNGA --}}
      <div class="main-content-section">
        <h2>LE LUNGHE</h2>
        @foreach($pastaArray as $index => $pasta)
          @if($pasta["tipo"]==="lunga")
            <div class="pasta">
              {{-- Immagine cliccabile pasta --}}
              <a href="{{"/product/" . ($index + 1)}}">
                <img class="pasta-img"src="{{$pasta["src"]}}" alt="" >
              </a>

            </div>
          @endif
        @endforeach
      </div>
      {{-- /SEZIONE PASTA LUNGA --}}


      {{-- /SEZIONE PASTA CORTA --}}
      <div class="main-content-section">
        <h2>LE CORTE</h2>
        @foreach($pastaArray as $index => $pasta)
          @if($pasta["tipo"]==="corta")
            <div class="pasta">
              {{-- Immagine cliccabile pasta --}}
              <a href="{{"/product/" . ($index + 1)}}">
                <img class="pasta-img"src="{{$pasta["src"]}}" alt="" >
              </a>

            </div>
          @endif
        @endforeach
      </div>
      {{-- /SEZIONE PASTA CORTA --}}

      {{-- /SEZIONE PASTA CORTISSIMA --}}
      <div class="main-content-section">
        <h2>LE CORTISSIME</h2>
        @foreach($pastaArray as $index => $pasta)
          @if($pasta["tipo"]==="cortissima")
            <div class="pasta">
              {{-- Immagine cliccabile pasta --}}
              <a href="{{"/product/" . ($index + 1)}}">
                <img class="pasta-img"src="{{$pasta["src"]}}" alt="" >
              </a>

            </div>
          @endif
        @endforeach
      </div>
      {{-- /SEZIONE PASTA CORTISSIMA --}}

    </div>
  </div>
@endsection
