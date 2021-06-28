<?php
include 'model/conexion.php';
$sentencia =$bd->query('select * from muebles where Categoria_idCategoria = 4');
$muebles = $sentencia->fetchall(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Tablero GyS</title>
    
  </head>
  <body>
    <!--INICIO MENU -->
   <?php
   include 'cabecera/menu.php';
   ?>
    <!--FIN MENU --->
    

         <!--MUESTRA MUEBLES -->
         <div class="container">
        <div class="row">
            
            <?php
               foreach ($muebles as $dato ){
            
            ?>
            
            <div class="col-md-4 text-center mt-4">
                <a href="detalle.php?codigo=<?php echo $dato->idMueble ?>"><img src="img/<?php echo $dato->foto;?>" class="img-fluid"></a>
                <h2><?php echo $dato->nomMueble; ?></h2>
                <a href="detalle.php?codigo=<?php echo $dato->idMueble ?>" class="btn btn-primary">Ver detalles</a>
            </div>
            
            <?php
               }
            ?>
            
        </div>
    </div>
    
    <!--Prueba -->
    <p class="text-center">SOMOS UNA EMPRESA PERUANA LIDER EN LA INDUSTRIA DE FABRICACIÓN DE
                           MUEBLES DE COCINA, CLOSETS Y BAÑOS EN MELAMINE</p>
    
    <!--Fin Prueba -->
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
