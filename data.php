<?php
$cantidad            = $_REQUEST['cantidad'];

$quitarString        = array(",", "."); 
$sinStrinPrecio      = str_replace($quitarString, "", $cantidad);
$cantidadFormateada  =  number_format($sinStrinPrecio, 0,'','.');

echo '<strong>$</strong> '. $cantidadFormateada ;
?>