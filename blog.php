<?
require 'index.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Tablero GyS</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!--INICIO MENU -->
    <?php
    include 'cabecera/menu.php';
    ?>
    <!--FIN MENU --->
    <br>


    <main class="contenedor seccion contenido-centrado">
        <h1 class="fw-300 centrar-texto">Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/Mela.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Muebles de melamine</h4>
                </a>
                <p> Publicado el: <span> 13/09/2020 </span> por: <span> Admin </span> </p>
                <p style="text-align: justify;">Nuestros muebles para cocina, baño, dormitorio, oficina en melamina son
                    100% exclusivos y a medida.
                    Un trabajo minucioso que cumple expectativas, pero que por sobre todo entregamos un producto
                    funcional, cómodo de usar y con materiales de la mejor calidad.</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/madera.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Muebles de madera</h4>
                </a>
                <p>Publicado el: <span> 13/09/2020 </span> por: <span> Admin </span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a
                    tu espacio</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/formica.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Tableros en fornica </h4>
                </a>
                <p>Publicado el: <span> 13/09/2020 </span> por: <span> Admin </span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a
                    tu espacio</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/granito.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Tableros de Granito</h4>
                </a>
                <p>Publicado el: <span> 13/09/2020 </span> por: <span> Admin </span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a
                    tu espacio</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/marmol.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Tableros de Cuarzo</h4>
                </a>
                <p>Publicado el: <span> 13/09/2020 </span> por: <span> Admin </span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a
                    tu espacio</p>
            </div>
        </article>


        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/cuarzo.jpg" alt="Entrada de blog">
            </div>
            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Tableros de Marmol</h4>
                </a>
                <p>Publicado el: <span> 13/09/2020 </span> por: <span> Admin </span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a
                    tu espacio</p>
            </div>
        </article>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="index.php">INICIO</a>
                <a href="empresa.php">EMPRESA</a>
                <a href="blog.php">BLOG</a>
                <a href="contacto.php">CONTACTO</a>
            </nav>
            <p class="copyright">JOSSELINRUDI 2021 &copy; </p>
        </div>
    </footer>

</body>

</html>