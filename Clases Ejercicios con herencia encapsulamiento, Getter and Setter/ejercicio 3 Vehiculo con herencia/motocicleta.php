<?php

require_once "vehículo.php";

class Motocicleta extends Vehículo {
    public string $clase = "Motocicleta";

    //metodo

    public function Cilindrada(){
        return "Esta motocicleta pertenece a la marca " . $this->getMarca() . " y su modelo es " . $this->getModelo() . " y su cilindrada es de " . $this->getCilindrada() . " Cm3 ";
    }
}


?>