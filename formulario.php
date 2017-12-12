<?php
print " <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Formulario Datos</title>
        <meta charset=\"utf-8\"/>
    </head>
    <body> ";
    $titulo = "Formulario Datos";
    print "<h1>$titulo</h1>";
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $correo=$_POST["correo"];

    $dia=$_POST["dia"];
    $mes=$_POST["mes"];
    $anio=$_POST["anio"];

    $ciudad=$_POST["ciudad"];
    if(!empty( $_POST["codigoPostal"])&&isset($_POST["codigoPostal"]))
    {
        $codidoPostal=$_POST["codigoPostal"];
    }

    $pais=$_POST["pais"];
    $name=$_POST["name"];
    $contrasena=$_POST["contrasena"];

    if(isset( $_POST["publicidad"]))
    {
        $ofertas=$_POST["publicidad"];
    }
    
    $contrasenaAgain=$_POST["contrasenaAgain"];
    if($contrasena==$contrasenaAgain)
    {
    if(!empty($apellido))
    {
        echo "<p>El usuario ".$name."  con nombre: ".$nombre." ".$apellido." y correo: ".$correo." se ha registrado correctamente</p>";
    }else{
        echo "<p>El usuario ".$name."  con nombre: ".$nombre." y correo: ".$correo." se ha registrado correctamente</p>";
    }
    if($dia!="Dia"&&$mes!="Mes"&&$anio!="Año")
    echo "<p>El usuario nació el día: ".$dia."/".$mes."/".$anio."</p>";
    if(!empty($codidoPostal)&&$pais!="Pais")
    {
        echo "<p>Vive en: ".$ciudad."(".$codidoPostal.") país: ".$pais."</p>";
    }else{
        echo "<p>Vive en: ".$ciudad."</p>";
        
    }
    echo "<p>La contraseña es: ".$contrasena."</p>";
    if(isset( $_POST["ofertas"]))
    {
        if($publicidad=="dia")
        {
            echo "<p>El usuario recibirá publicidad  cada dia</p>";
        }else if($publicidad=="semana")
        {    
            echo "<p>El usuario recibirá publicidad una vez a la semana</p>";
            
        }else if($publicidad=="mes")
        {
            echo "<p>El usuario recibirá publicidad una vez al mes</p>";
            
        }    
    }
    }else{
        echo "<p>El usuario no ha introducido correctamente la comprobacion de contraseña</p>";
    }
    print "
    </body>
</html>
   ";
?>