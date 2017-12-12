<?php

include_once("Estudiante.php");
include_once("Persona.php");
print " <!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Titulo de la WEB</title>
        <meta charset=\"utf-8\"/>
    </head>
    <body> ";
    $titulo = "Primera página HTML";

    print "<h1>$titulo</h1>";
    // Se crea el objeto persona
    $persona = new Persona("Nicolás", "Hernández", "25");
    echo "<p>". $persona->saludar() . "</p>";
    $estudiante = new Estudiante("Carlos", "Garrido","18",3456, array("DEINT", "SGEMP","EINE", "PSPRO", "MOV"));
    echo "<p>". $estudiante->saludar() . "<p>";
    $array_personas = array();
    $array_personas[0] = $persona;
    $array_personas[1] = $estudiante;

    for ($i=0; $i < count($array_personas); $i++) { 
        if ($array_personas[$i] instanceof Estudiante) {
            echo "<h1>ESTUDIANTE</h1>";
            echo "<p>Nombre: " . $array_personas[$i]->getNombre() . "</p>";
            echo "<p>Apellido: " . $array_personas[$i]->getApellido() . "</p>";
            echo "<p>Edad: " . $array_personas[$i]->getEdad() . "</p>";            
            echo "<p>Código: " . $array_personas[$i]->getCodigo() . "</p>";
            // El uso de métodos y propiedades estáticas se realiza mediante el nombre de la clase
            echo "<p>Número de módulos: ".Estudiante::$numModulos."<p>";
            echo "<p>Módulos matriculados: " . print_r($array_personas[$i]->getMatricula(), true) . "</p>";            
            
        }
        else{
            echo "<h1>PERSONA</h1>";            
            echo "<p>Nombre: " . $array_personas[$i]->getNombre() . "</p>";
            echo "<p>Apellido: " . $array_personas[$i]->getApellido() . "</p>";
            echo "<p>Edad: " . $array_personas[$i]->getEdad() . "</p>"; 
        }
    }



print "
    </body>
</html>
";
// Eliminar un objeto
unset($persona);
unset($estudiante);
?>