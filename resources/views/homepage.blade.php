@extends('layout')

@section('content')

  @foreach($pastaArray as $pasta)
    <div class="pasta">
      @php
        $link = "/product/" . $pasta["titolo"];
      @endphp
      <a href="{{$link}}"> {{$pasta["titolo"]}} </a>
      {{$pasta["tipo"]}} <br>
      {{$pasta["cottura"]}} <br>

      <br> <br>
    </div>

  @endforeach
@endsection
