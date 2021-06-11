<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corafro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fuentes.css">
    <link rel = "shortcut icon" href = "ico/favicon.png">
    <script src="https://kit.fontawesome.com/7ab88d866f.js" crossorigin="anonymous"></script>

</head>
<body>


 <!-- Logo -->
 <div class="bloque">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
    <a class="navbar-brand mr-auto" href="inicio">Corafro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" 
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicio"><i class="fas fa-home"></i>Inicio <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros"><i class="fas fa-users"></i>Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actividad"><i class="fas fa-puzzle-piece"></i>Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto"><i class="fas fa-phone"></i>Contacto</a>
                    </li>
                </ul>
            </div>
           
           <!--<a href="https://www.paypal.com/donate?token=7wlrHkvQRoqbeVDhPPEZZ7KTJmHVE6HMns-GeIN9SxEFdq2hb-Hx_2MNhRD36WNz8_yhdXKEEjAYmLL0" type="button" target="blank" class="btn btn-outline-light"><i class="fas fa-hand-holding-heart"></i>Haz tu donación</a>-->
           
           
           <div class = donar>
    <a href="/donacion" type="button" class="btn btn-outline-light"><i class="fas fa-hand-holding-heart"></i> Haz una donación</a>
</div>

        </nav>
            </div>





            <div class="sticky-container">
    <ul class="sticky">
        <li>
            <img src="images/PNG/facebook2.png" width="32" height="32" class="img-fluid">
            <p><a href="https://www.facebook.com/Corporación-sin-límites-afrocolombiana-Corafro-107619261523457" target="_blank"><br>Facebook</a></p>
        </li>
        
        <li>
            <img src="images/PNG/mail.png" width="32" height="32" class="img-fluid">
            <p><a href="mailto:corafro2008@hotmail.com" target="_blank"><br>Hotmail</a></p>
        </li>
        <li>
            <img src="images/PNG/whatsapp.png" width="32" height="32" class="img-fluid">
            <p><a href="https://api.whatsapp.com/send?phone=573106096963" target="_blank"><br>WhatsApp</a></p>
        </li>
    </ul>
</div>







    <!-- Contenido -->
    @yield('content')  @section('content')

    <!-- Footer -->




    
    <div class="bloque-footer-1">
    <div class = donar>
    <a href="/donacion" type="button" class="btn btn-outline-light"><i class="fas fa-hand-holding-heart"></i> Haz una donación</a>
</div>
</div>






<div class="bloque-footer">
        <div class="row container-fluid">          
    <div id="footer-widget-area-1" class="col-4">		
    
        <div class="textwidget">
            <p>
            <iframe style="border: 0;" 
                tabindex="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7675.362328049171!2d-
                74.11263972632108!3d4.500611582700211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3fa3
                c9da6447e1%3A0xbfbc0213367cde0e!2sCra.%207%20Este%20%2389-18%2C%20Bogot%C3%A1!5e1!3m2!1ses!2sco!4v1
                617918237124!5m2!1ses!2sco" frameborder="0" class=img-fluid allowfullscreen="" aria-hidden="false">
            </iframe></p>
    </div>
        </div>	
                              
             
    <div id="footer-widget-area-2" class="col-4">
    <div class="textwidget">
            <img src="{{asset('images/logo (2).png')}}" class="img-fluid" style= "max-width:100%;" alt="" loading="lazy">
            </div>
    </div>

    <div id="footer-widget-area-3" class="col-4">
    
    <div class="textwidget">
        <ul>
        <li>corafro2008@hotmail.com</a></li>
        <li>Cel: 310 609 6963</li>
        <li>Tel: 305 1752</li>
        <li>Cra 7 No. 89-62 Sur</li>
        <li>Barrio Chuniza</li>
        </ul>
    </div>
    
</div>
                        
    </div>
    
            </div>

            </div>

<div class=bloque2>

        <strong>Copyright &copy; 2021 <a>Fundación Corafro</a>.</strong>
        <strong>All rights reserved.</strong>
        <div class="float-right d-none d-sm-inline-block">
            <b></b> 
        </div>
 
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197801920-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-197801920-1');
</script>
    

</body>
</html>