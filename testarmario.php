<?php

include_once(biblioteca.php);
include_once(Mueble.php);
include_once(Armario.php);
print " <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Titulo de la WEB</title>
        <meta charset=\"utf-8\"/>
    </head>
    <body> ";
    $titulo = "Primera página HTML";

    print "<h1>$titulo</h1>";
//$id = 1;
//$material = madera;
//$precio = 20;
//$puertas = 4;
//$resistencia = 7;
echo "<p> Aquí bien</p>";
$mueble = new Mueble(1, "madera", 20);
echo "<p> Mi mueble de " . $mueble->getMaterial() . "</p>";
$armario = new Armario(1, "madera", 20, 4, 7);
echo "<p>Me he comprado un armario (id = " . $armario->getId() . ") de " . $armario->getMaterial() . 
" con " . $armario->getPuertas() . " y me ha costado " . $armario->getPrecio() . "€.</p>";
//show_footer();
