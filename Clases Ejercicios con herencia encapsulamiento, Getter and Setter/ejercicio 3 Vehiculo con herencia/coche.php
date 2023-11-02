<?php
require_once "vehículo.php";

class Coche extends Vehículo {
    public string $clase = "Coche";

    //metodo

    public function numeroPuertas(){
        return "Este coche es de la marca " . $this->getMarca() ." y su modelo es " . $this->getModelo() . " y tiene " . $this->getNumeroPuertas() . " puertas.";
    }
}


?>