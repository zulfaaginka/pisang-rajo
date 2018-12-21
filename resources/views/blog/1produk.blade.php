@extends('layouts.master')

@section('title','new - Rajo')

@section('content')
<div class="container">
    <h1>{{ $menu->nama_menu }}</h1>

  <hr>

  <div class="row">
      <div class="col-md-4">
          <img src="{{ asset('storage/menu_img/' . $menu->gambar_menu) }}" alt="product" class="img-responsive" width="300" height="250">
      </div>

      <div class="col-md-8">
          <h3>{{ $menu->harga() }}</h3>
          <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
              {!! csrf_field() !!}
              <input type="hidden" name="id" value="{{ $menu->id }}">
              <input type="hidden" name="name" value="{{ $menu->nama_menu }}">
              <input type="hidden" name="price" value="{{ $menu->harga_menu }}">
              <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
          </form>


          <br><br>

          {{-- {{ $product->description }} --}}
      </div> <!-- end col-md-8 -->
  </div> <!-- end row -->

  <div class="spacer"></div>

    
@endsection