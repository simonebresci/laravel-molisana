@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product</title>
  </head>
  <body>

      {{-- Prodotto selezionato --}}
      @foreach($pastaArray as $pasta)
          @if($pasta["titolo"] === $idProduct)
            <div class="pasta">
              @php
                $link = "/product/" . $pasta["titolo"];
              @endphp
              <a href="{{$link}}"> {{$pasta["titolo"]}} </a>
              {{$pasta["tipo"]}} <br>
              {{$pasta["cottura"]}} <br>
              {{$pasta["peso"]}} <br>
              {{$pasta["descrizione"]}} <br>
            </div>
          @endif
      @endforeach
      {{-- /Prodotto selezionato --}}

  </body>
</html>
@endsection('content')
