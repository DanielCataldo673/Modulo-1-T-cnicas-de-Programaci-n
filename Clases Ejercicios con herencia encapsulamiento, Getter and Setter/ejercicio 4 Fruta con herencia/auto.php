<?php

    class Auto {
        private $marca;
        private $modelo;

        public function __construct($marca, $modelo)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
        }


        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($marca){
                $this->marca = $marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }


    }

    //index

    $miAuto = new Auto("Toyota" , "Corolla");

    echo "marca: " .  $miCoche->getMarca() . "<br>";
    echo "modelo: " . $miCoche->getModelo(). "<br>";

    $miCoche->setModelo("Supra");
    echo "Nuevo modelo: " . $miCoche->getModelo(). "<br>";







?>