<?php

print " <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Titulo de la WEB</title>
        <meta charset=\"utf-8\"/>
    </head>
    <body> ";
    $titulo = "Ámbito estático";
    print "<h1>$titulo</h1>";
    contador_visitas();
    contador_visitas();
    /**
     * Una variable estática se inicializa en la primera llamada de la función pero el valor de esa variable
     * no se pierde. Se utiliza en funciones RECURSIVAS.
     */
    function contador_visitas(){
        static $visitas = 0;
        static $visitas = 1+2; // Es correcto en PHP 5.6 y superior
        //static $visitas = sqrt(121); No se puede utilizar en la inicialización el resultado de una función
        echo "<p>Se ha visitado la página: ".$visitas." veces</p>";
        $visitas++;
    }

print "
    </body>
</html>
";
?>