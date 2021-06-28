<?php
include 'model/conexion.php';
$sentencia =$bd->query('select * from muebles');
$muebles = $sentencia->fetchall(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Tablero GyS</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styles.css" />

</head>

<body>


    <!-- Código de instalación Cliengo para GySTableros.com -->
    <!-- Código de instalación Cliengo para GySTableros.com -->
    <script type="text/javascript">
    (function() {
        var ldk = document.createElement('script');
        ldk.type = 'text/javascript';
        ldk.async = true;
        ldk.src =
            'https://s.cliengo.com/weboptimizer/609fd3e9331612002af832c1/609fd497c329b9002a31ec6c.js?platform=view_installation_code';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ldk, s);
    })();
    </script>

    <!-- Fin  Código de instalación Cliengo  -->
    <!--INICIO MENU -->
    <?php
   include 'cabecera/menu.php';
   ?>
    <!--FIN MENU --->

    <!--Inicio de carrucel -->
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/dormitorio5.jpg" class="d-block w-100" alt="..." width="620" height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>DISEÑO & FABRICACIÓN</h3>
                        <h5> de muebles para el hogar </h5>
                        <p>Todo tipo de trabajos en melanina con diseños exclusivos,
                            modernos y personalizados, hechos a medida y según sus requerimientos.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/oficina6.jpg" class="d-block w-100" alt="..." width="620" height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Diseño a Medidas</h5>
                        <p>Cuidamos cada detalle de diseño y fabricación
                            para que tus muebles sean únicos y funcionales.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/sala5.jpg" class="d-block w-100" alt="..." width="620" height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Elegancia y Funcionalidad</h5>
                        <p>Diseño de piezas únicas que brindan estética, comodidad, confort
                            y facilita la vida diaria.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--Fin de carrucel -->


    <main class="seccion contenedor">
        <h2 class="fw-300 centrar-texto">NUESTROS SERVICIOS </h2><BR>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="img/cocina3.jpg" alt="producto cocina" height="300" width="500" />
                <div class="contenido-anuncio">
                    <h3>Muebles de Cocina</h3>
                    <p>
                        Casa en el lago con excelente vista, acabados de lujo a un
                        excelente precio
                        Casa en el lago con excelente vista, acabados de lujo a un
                        excelente precio
                    </p>

                    <a href="cocina.php" class="boton boton-amarillo d-block">Ver más Detalles</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/oficina4.jpg" alt="producto oficina" height="300" width="500" />
                <div class="contenido-anuncio">
                    <h3>Muebles de Oficina</h3>
                    <p style="text-align: justify;">
                        Casa con diseño moderno, así como tecnología inteligente y
                        amueblada
                        Casa con diseño moderno, así como tecnología inteligente y
                        amueblada
                    </p>

                    <a href="oficina.php" class="boton boton-amarillo d-block">Ver más Detalles</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/bano3.jpg" alt="Producto de baño" height="300" width="500"/>
                <div class="contenido-anuncio">
                    <h3>Muebles Para Baño </h3>
                    <p style="text-align: justify;" >
                        Casa con alberca y acabados de lujo en la ciudad, excelente
                        oportunidad
                        Casa con alberca y acabados de lujo en la ciudad, excelente
                        oportunidad
                        
                    </p>

                    <a href="baño.php" class="boton boton-amarillo d-block">Ver más Detalles</a>
                </div>
            </div>
        </div>

        <div class="ver-todas">
            <a href="blog.php" class="boton boton-verde">Ver Blog</a>
        </div>
    </main>

    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra el mueble de tus sueños</h2>
            <p>
                Llena el formulario de contacto y un asesor se pondrá en contacto
                contigo a la brevedad
            </p>
            <a href="contacto.php" class="boton boton-amarillo">Contactános</a>
        </div>
    </section>

    <div class="seccion-inferior contenedor seccion">
        <section class="blog">
            <h3 class="centrar-texto fw-300">Nuestro Blog</h3><br>

            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/melamina.jpg" alt="Entrada de blog" />
                </div>
                <div class="texto-entrada">
                    <a href="blog.php">
                        <h4>Muebles de melamine</h4>
                    </a>
                    <p>
                        Publicado el: <span> 10/12/2020 </span> por: <span> Admin </span>
                    </p>
                    <p style="text-align: justify;">
                    Nuestros muebles para cocina, baño, dormitorio, oficina en melamina son 100% exclusivos y a medida. Un trabajo minucioso 
                    que cumple expectativas, pero que por sobre todo entregamos un producto funcional, cómodo de usar y 
                    con materiales de la mejor calidad.
                    </p>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/dry.jpg" alt="Entrada de blog" />
                </div>
                <div class="texto-entrada">
                    <a href="blog.php">
                        <h4>Trabajos en Driwall</h4>
                    </a>
                    <p>
                          Publicado el: <span> 13/09/2020 </span> por: <span> Admin </span>
                    </p>
                    <p style="text-align: justify;">
                        Ofrecemos una muy buena alternativa con este sistema constructivo frente al sistema tradicional. 
                        Para cada proyecto trabajado los materiales son de primera calidad y trabajamos en base a procedimientos
                        optimizados
                    </p>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3 class="centrar-texto fw-300">Testimoniales</h3><br>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención 
                    y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Zabdiel Garcia Prado</p>
            </div>
        </section>
    </div>


    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.php">INICIO</a>
                <a href="empresa.php">EMPRESA</a>
                <a href="blog.php">BLOG</a>
                <a href="contacto.php">CONTACTO</a>
            </nav>
            <p class="copyright">JOSSELINRUDI 2021  &copy; </p>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>