<?php
print " <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Titulo de la WEB</title>
        <meta charset=\"utf-8\"/>
    </head>
    <body> ";
    $titulo = "Información de la variable superglobal";
    echo "<pre>".print_r($_SERVER, true)."</pre>";
    echo "<h1>El nombre del servidor es".$_SERVER['SERVER_NAME'];
print "
    </body>
</html>
";
?>