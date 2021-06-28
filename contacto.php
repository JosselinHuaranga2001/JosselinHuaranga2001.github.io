<?
require 'index.php';
include 'email.php';
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
    <h1 class="fw-300 centrar-texto">Contacto</h1>
    <img src="img/oficina6.jpg" alt="Imagen Principal" height="400" width="1500">

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto</h2>

        <form class="contacto" action="enviar.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre">

                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email" placeholder="Tu Correo electrónico" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Tu Teléfono" required>

                <label for="mensaje">Mensaje: </label>
                <textarea name="mensaje" id="mensaje"></textarea>

            </fieldset>

            <input type="submit" value="Enviar" class="boton boton-verde">

        </form>
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