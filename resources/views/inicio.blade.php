@extends('layouts.layout')

    @section('content')

    <div class="fondo2">
                   
 <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto">
                <img src="" class="img-fluid" width="1300" alt="" loading="lazy">
                <img src="{{asset('images/logo4.2.png')}}" class="img-fluid" style="max-width:100%;"  alt="" loading="lazy">      
                <h1 style="font-size:3vw;">Bienvenido</h1>
                <h3 style="font-size:2vw;">Por el mejoramiento de la calidad de vida y salvaguardar los derechos humanos de
                  la <br> niñez y de nuestra comunidad.</h3>
              </a>
        </div>
    </nav>
    </div>
    <!-- Contenido -->
    
        <!-- Posts -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  Slider 1
    <div class="carousel-item active">
      <img src="{{asset('images/FotoJet.png')}}" class="img-fluid" alt="...">
    </div>
  Slider 2
    <div class="carousel-item">
      <img src="{{asset('images/FotoJet2.png')}}" class="img-fluid" alt="...">
    </div>
  Slider 3
    <div class="carousel-item">
      <img src="{{asset('images/FotoJet3.png')}}" class="img-fluid" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

            
        </div>
   

    @endsection