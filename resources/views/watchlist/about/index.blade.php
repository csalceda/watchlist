@extends('layout.app')

@section('content')

<div class="container pt-120 pb-120">
    <div class="row">
        <div class="col-sm-6">
            <img class="about-img" src="{{ asset('img/slide/1.jpg') }}" alt="film">
        </div>
        <div class="col-sm-6">
            <p class="pt-120 pb-120">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos impedit quam totam distinctio suscipit eveniet minus culpa dolores corporis blanditiis? Repellat, facere recusandae? Saepe delectus accusamus nulla aliquid quidem incidunt praesentium sit quasi. Qui quos eligendi alias, sunt repellendus sed?</p>
        </div>
    </div>
</div>

{{-- Carousel --}}
{{-- <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
  
  <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('img/slide/1.jpg') }}" alt="Los Angeles" width="300px" height="auto">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/slide/2.jpg') }}" alt="Chicago" width="300px" height="auto">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/slide/3.jpg') }}" alt="New York" width="300px" height="auto">
        </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    </div> --}}

@endsection