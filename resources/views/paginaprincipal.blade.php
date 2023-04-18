



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="css/index.css">
     
    <link rel="stylesheet" href="iconos/style.css">
    <link rel="stylesheet" href="iconos/main.css">
</head>
<body>
    <header>
        <nav>
            <a href="menu.html">Inicio</a> /
            <a href="armatupc.html">Arma tu PC</a> /
            <a href="tiendas.html">Tiendas Asociadas</a> /
            <a href="comunidad.html">Comunidad</a> /
            <a href="index.html">salir</a> /
            <a href="Seguimiento.html">seguimiento de pedido</a> /
            @extends('layouts.app')
        </nav>
        <section class="textos-header">
            <h1>REX-SHOP</h1>
            <h2>Crea y Disfruta.</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #000000e2;"></path>
        </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">¿Que somos?</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="imagenes/portada1.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>one</span>Introducción</h3>
                    <p>Consiste en una pagina web, para la creación y configuracion de computadoras a gusto de los usuarios  a la vez 
                        dá sugerencias según tus las especificaiones usadas en la busqueda Todo a eleccion del usuario.
                    </p>
                    
                </div>
            </div>
        </section>
        
        <section class="portafolio">
            
                <h2 class="titulo">¡Publicidad!</h2>
                <div class="publicidad">
                   <video src="imagenes/Cómo armar tu PC Gamer con Ryzen 5 5600g y 16GB de Ram.mp4" controls>

                   </video>
                </div>
        </section>

        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">¡Nuestros servicios!</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="imagenes/arma.png" alt="">
                        <h3>Armar tu pc</h3>
                        <p>Podras armar tus propios ensambles de computadorad con tus componentes favoritos</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="imagenes/tienda.png" alt="">
                        <h3>Tiendas</h3>
                        <p>Te redirigira a las tiendas que tienen precios muy accesibles para que puedas crear tus modelos de computadorasd a tu gusto</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="imagenes/comunidad.png" alt="">
                        <h3>Comentarios</h3>
                        <p>Podras ver y compartir tus Comentarios con personas y amigos</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services1">
            <h2 class="titulo">¿Quienes somos?</h2>
            <div class="cards">
                
                <div class="card">
                    <img src="imagenes/Gabriel.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Gabriel Vazquez</h4>
                        <p>Hoy Diseño Mañana programo</p>
                    </div>
                </div>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Celular</h4>
                <p>4646549072</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>PROXIMAMENTE</p>
            </div>
            <div class="content-foo">
                <h4>Ubicacion</h4>
                <p>Salamanca GTO</p>
            </div>
            <div class="rsocial-bar">

                <a href="https://www.youtube.com/channel/UCAxjn7m4Qi3RXFijJhXIu3A" class="icon icon-youtube" target="_blank"></a>
                
                <a href="https://www.youtube.com/channel/UCAxjn7m4Qi3RXFijJhXIu3A" class="icon icon-phone" target="_blank"></a>
                
                <a href="https://www.youtube.com/channel/UCAxjn7m4Qi3RXFijJhXIu3A" class="icon icon-calendar" target="_blank"></a>
                
                <a href="https://www.youtube.com/channel/UCAxjn7m4Qi3RXFijJhXIu3A" class="icon icon-laptop" target="_blank"></a>
                
              
            </div>
        <h2 class="titulo-final">&copy;REX-SHOP</h2>
    </footer>
</body>
</html>