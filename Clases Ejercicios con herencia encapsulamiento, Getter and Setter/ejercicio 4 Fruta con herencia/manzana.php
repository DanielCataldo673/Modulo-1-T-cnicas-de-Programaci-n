<?php
require_once "fruta.php";

class Manzana extends Fruta {
    public string $clase = "Manzana";

    //metodo

    public function Tipo(){
        return "Esta fruta es una " . $this->getNombre() ." y su color es " . $this->getColor() . " , su tipo es " . $this->getTipo();
    }
}


?>