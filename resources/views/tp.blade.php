@extends('layouts.master')
@section('content')
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 sidebar">
          @include('layouts.sidebar')
        </div>
        <div class="col-md-10" style="padding: 0">
          @include('layouts.carousel')
        </div>
      </div>
  </div>

  <div class="clearfix visible-xs-block"></div>
  <hr>

  <div class="container">
    <div class="row">
      <a href="/products/newest">
        <h3 style="padding: 0 15px">Newest:</h3>
      </a>
      <div class="slider">
        <ul>
          @include('layouts.items.each')
          @include('layouts.items.each')
          @include('layouts.items.each')
          @include('layouts.items.each')
          @include('layouts.items.each')
          @include('layouts.items.each')
        </ul>
      </div>
      
      {{-- <a href="/products/newest">
        <h3 style="padding: 0 15px">Most watching:</h3>
      </a>
      @include('layouts.items.each')
      @include('layouts.items.each')
      @include('layouts.items.each')
      @include('layouts.items.each')
      <a href="/products/newest">
        <h3 style="padding: 0 15px">Suggestion:</h3>
      </a>
      @include('layouts.items.each')
      @include('layouts.items.each')
      @include('layouts.items.each')
      @include('layouts.items.each') --}}
    </div>
  </div>
  <div class="clearfix visible-xs-block"></div>
  @include('layouts.footer')
@endsection

@section('scripts.footer')
  <script>
    $(document).ready(function(){

        $('.carousel').carousel({
          interval: 5000
        });
        $('.slider').jcarousel({
        });

    });
    
  </script>
@endsection