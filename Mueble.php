<?php
    class Mueble{
        private $id;
        private $material;
        private $precio;

        public function __construct($id, $material, $precio) {
            $this->id = $id;
            $this->material = $material;
            $this->precio = $precio;
        }

        public function getId(){
            return $this->id;
        }

        public function getMaterial()
        {
            return $this->material;
        }

        public function getPrecio()
        {
            return $this->precio;
        }
        public function __destruct(){
            echo "Mueble destruido";
        }
    }
?>