@extends('layouts.app')
@section('homepage')

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<section class="mt-1">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">             
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>           
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>    
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>    
        </ol>
        <div class="carousel-inner">            
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block banner__text">                   
                    <h1>Lord Jackets</h1>
                    <a href=""></a>
                </div>
                <img class="d-block w-100" style="height:900px !important" src="img/banner/hero-1.jpg" alt="Second slide">
            </div>       
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block banner__text">                   
                    <h1>Lord Jackets</h1>
                    <a href=""></a>
                </div>
                <img class="d-block w-100" style="height:900px !important" src="img/banner/hero-2.jpg" alt="Second slide">
            </div>   
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block banner__text">                   
                    <h1>Lord Jackets</h1>
                    <a href=""></a>
                </div>
                <img class="d-block w-100" style="height:900px !important" src="img/banner/hero-3.jpg" alt="Second slide">
            </div>          
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</section>
@endsection