<?php
print " <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Titulo de la WEB</title>
        <meta charset=\"utf-8\"/>
    </head>
    <body> ";
    $titulo = "Arrays";
    print "<h1>$titulo</h1>";
    // Las matrices no son tipadas y se pueden tener diferentes tipos
    $nacimientos = ["Santiago", "Ramón y Cajal", 1852];
    echo "$nacimientos[0]"." "."$nacimientos[1] nació en el año "."$nacimientos[2]";
    // Las matrices pueden ser multidimensionales y asociativas
    $informacion = [
        ["nombre"=>"Santiago","apellido"=>"Ramón y Cajal","anio"=>1852],
        ["nombre"=>"Juan","apellido"=>"Casals","anio"=>1932]   
    ];
    echo "<h3>Primer array </h3>";
    echo "<p>".print_r($informacion, true)."</p>";    
    $informacion2 = array(array("nombre"=>"Santiago","apellido"=>"Ramón y Cajal","anio"=>1852),
    array("nombre"=>"Juan","apellido"=>"Casals","anio"=>1932));
    echo "<h3>Segundo array </h3>";
    echo "<p>".print_r($informacion2, true)."</p>";
    
    //En las matrices multidimensionales se debe concatenar porque no hace la conversion a string de las key
    echo "<p>Datos del segundo médico: {$informacion2[1]['nombre']}</p>";
    // O bien se puede utilizar las llaves
    echo "<p>Datos del segundo médico: ".$informacion2[1]['nombre']."</p>";    
    echo "<h3>Sobreescritura</h3>";
    // Si varios elementos utilizan la misma clave sólo se utiliza la última
    // PHP convierte las claves
    // PHP no distingue entre array indexados (con key numérica y en orden) con asociativos
    $abecedario = array(
        1=>"a",
        "1"=>"b",
        1.5=> "c",
        true => "d"
    );
    echo "<p>".print_r($abecedario, true)."</p>";
    echo "<h3>Array mixto</h3>";
    $arraymixto = array(
        "uno"=>"a",
        "dos"=>"b",
        100=> "c",
        -100 => "d"
    );
    echo "<p>".print_r($arraymixto, true)."</p>";
    echo "<h3>Array prank</h3>";
    $arrayprank = array(
        "a",
        "b",
        6=> "c",
        "d"
    );
    echo "<p>".print_r($arrayprank, true)."</p>";
print "
    </body>
</html>
";
?>