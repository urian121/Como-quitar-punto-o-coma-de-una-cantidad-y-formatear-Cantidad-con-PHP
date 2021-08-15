<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="logo-mywebsite-urian-viera.svg"/>

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/material.min.css" rel="stylesheet">
    <title>Como quitar punto o coma de una cantidad y formatear Cantidad :: Webdeveloper Urian Viera </title>
  </head>
  <body>

<nav class="navbar navbar-light" style="background-color: #55468c !important;">
  <a class="navbar-brand" href="#">
   <strong style="color: #fff">WebDeveloper</strong>
  </a>
</nav>

<div class="container mt-5"> 

  
  <h3 class="text-center mb-5" style="font-weight: 800; font-size: 35px">
    Cómo quitar punto o coma de una cantidad y formatear Cantidad  <strong>PHP</strong> 
    <hr>
  </h3>

<?php
if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
$cantidad            = $_REQUEST['cantidad'];

$quitarString        = array(",", "."); 
$sinStrinPrecio      = str_replace($quitarString, "", $cantidad);
$cantidadFormateada  =  number_format($sinStrinPrecio, 0,'','.');
?>
<h1 class="text-center mb-5">
  <strong>$ <?php echo $cantidadFormateada; ?></strong>
</h1>
<?php } ?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="form-group">
    <label for="cantidad">Escriba la Cantidad</label>
    <input type="text" name="cantidad" class="form-control">
  </div>
  
  <input type="submit" name="submit" class="btn btn-primary btn-block" value="Formatear Cantidad">
</form>
 
  

</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="js/material.min.js"></script>

  </body>
</html>



