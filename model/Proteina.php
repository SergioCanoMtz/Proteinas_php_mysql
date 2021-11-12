<?php

    class Proteina{
        private $nombre;
        private $tipo;

        public function __construct($nombre, $tipo){
            $this->nombre = $nombre;
            $this->tipo = $tipo;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return $this->tipo;
        }

    }

?>