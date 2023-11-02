<?php

    class Moto {
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

    $miMoto = new Moto("Honda" , "Transalp");

    echo "marca: " .  $miMoto->getMarca() . "<br>";
    echo "modelo: " . $miMoto->getModelo(). "<br>";

    $miMoto->setModelo("Dax");
    echo "Nuevo modelo: " . $miMoto->getModelo(). "<br>";







?>