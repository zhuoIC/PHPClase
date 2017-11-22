<?php
/**
 * En primer lugar se incluye los ficheros a usar
 * include (...);
 */

/**
 * En segundo lugar se define las constantes
 * no se puede redefinir una constante const
 */
    define("TRIANGULO", 1);
    define("CUADRADO", 2);
    define("RECTANGULO", 3);
    define("CIRCUNFERENCIA", 4);    
    define("MAX_VALUE_RAND", 4);
    define("MIN_VALUE_RAND", 1);
    const PI = 3.14;

    /**
     * Definir las variables
     */
    $lado1 = 6;
    $lado2 = 7;
    $base = 3;
    $altura = 4;
    $lado = 3;
    $radio = 3;
    print " <!DOCTYPE html>
    <html lang=\"es\">
        <head>
            <title>Titulo de la WEB</title>
            <meta charset=\"utf-8\"/>
        </head>
        <body> ";

        $figura = rand(MIN_VALUE_RAND, MAX_VALUE_RAND);
        switch($figura){
            case CUADRADO:
                echo "El área del cuadrado con lado: " . $lado . " es " . area_cuadrado();
                break;
            case TRIANGULO:
                echo "El área del triángulo con base: " . $base . " y altura: " . $altura. " es " . area_triangulo();                
                break;
            case RECTANGULO:
                echo "El área del rectángulo con el lado menor: " . $lado1 . " y el lado mayor: " .$lado2 . " es " . area_rectangulo();  
                break;
            case CIRCUNFERENCIA:
                echo "El perímetro de la circunferecia con radio: " . $radio . " es " . perimetro_circunferencia();  
                break;
        }
        function area_triangulo(){
            // Para usar una variable que se ha definido fuera de la función, se antepone global o se pasa por parámetro.
            global $base, $altura;       
            // si una variable se llama igual que otra global se usa siempre la local     
            //$base = 0;
            //$altura = 0;
            return ($base * $altura) / 2;
        }
        /**
         * Otra opción es acceder directamente a las variables predefinidas de PHP
         * (GLOBALS)
         */

        function area_cuadrado(){
            global $lado;
            return pow($GLOBALS['lado'], 2);
        }
        function area_rectangulo(){
            global $lado1, $lado2;
            return $lado1 * $lado2;
        }
        function perimetro_circunferencia(){
            global $radio;
            return 2 * $PI * $radio;
        }
    print "
        </body>
    </html>
    ";
?>