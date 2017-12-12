<?php
include ("Triangulo.php");
print " <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Titulo de la WEB</title>
        <meta charset=\"utf-8\"/>
    </head>
    <body> ";
    $titulo = "Primera página HTML";
    print "<h1>".$titulo."</h1>";
    $cateto1 = 2;
    $cateto2 = 3;
    $triangulo = new Triangulo($cateto1, $cateto2);
    echo "<p> Hipotenusa: ".$triangulo->calcularHipotenusa()."</p>";
    echo "<p> Cateto1: ".$triangulo->getCateto1()."</p>";
    echo "<p> Cateto2: ".$triangulo->getCateto2()."</p>";
    print "
    </body>
</html>
";
    unset($triangulo);
?>