@extends('layouts.layout')

    @section('content')
    
    <div class="fondo2">      
                   <nav class="navbar navbar-light bg-main">
                          <div class="container p-4">
                              <a class="navbar-brand m-auto">
                                  <img src="" class="img-fluid" width="1300" alt="" loading="lazy">
                                  <img src="{{asset('images/logo4.2.png')}}" class="img-fluid" style="max-width:100%;" alt="" loading="lazy">      
                              <h1 style="font-size:3vw;">Contacto</h1>
                              
                              <h3 style="font-size:2vw;">Ponte en contacto con nosotros.</h3>
                              </a>
                          </div>
                      </nav>
                      </div>
    <!-- Contenido -->
    <section class="container">
   
        <div class="row justify-content-center mb-5">
            <div class="col-12 text-center mt-5">
            <hr>
           
<form action="{{route('inicio.message')}}" method="POST">

    @csrf
    @if(count($errors) > 0)
            <div class = "alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
@endif   
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" id="name" placeholder="Nombre">
    </div>   
    @error('nombre')
    <br>
    <small>*{{$message}}</small>
    </br>
    @enderror
    <br>     
    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" aria-describedby="emailHelp" placeholder="e-mail">
    </div>
    @error('email')
    <br>
    <small>*{{$message}}</small>
    </br>
    @enderror
    <br>
    <div class="form-group">
        <label for="phone">Teléfono</label>
        <input type="number" name="telefono" value="{{old('telefono')}}" class="form-control" id="phone" placeholder="Teléfono">
    </div>
    @error('telefono')
    <br>
    <small>*{{$message}}</small>
    </br>
    @enderror
    <br>
    <div class="form-group">
        <label for="msg">Deja tu comentario</label>
        <textarea class="form-control" name="mensaje" id="msg" rows="3">{{old('mensaje')}}</textarea>
    </div>    
    @error('mensaje')
    <br>
    <small>*{{$message}}</small>
    </br>
    @enderror
  <button type="submit" class="btn btn-success mt-5">Enviar</button>
  <br>
  @if(session('success'))
    <div class = "alert alert-success">
        {{session('success')}}
        
    </div>
    
@endif   

</form>

<br><br>
O bien, si lo deseas, escríbenos al correo <a target="blank" href="mailto:corafro2008@hotmail.com">corafro2008@hotmail.com</a>
    
    </div>
    
    </section>
    
    @endsection
