<?php
include_once 'Mueble.php';
class Armario extends Mueble{
    private $puertas;
    private $resistencia;

    public function __construct ($id, $material, $precio, $puertas, $resitencia){
        parent::__construct($id, $material, $precio);
        $this->puertas=$puertas;
        $this->resistencia=$resistencia;
    }

    public function setPuertas($puertas)
    {
        $this->puertas = $puertas;
    }

    public function getPuertas(){
        return $this->puertas;
    }

    public function setResistencia($resistencia)
    {
        $this->resistencia=$resistencia;
    }

    public function getResistencia()
    {
        return $this->resistencia;
    }
}
?>