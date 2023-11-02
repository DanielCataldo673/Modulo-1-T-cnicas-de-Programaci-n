<?php

require_once "fruta.php";

class Banana extends Fruta {
    public string $clase = "Banana";

    //metodo

    public function Longitud(){
        return "Esta fruta es una " . $this->getNombre() . " y su color es " . $this->getColor() . " , su longitud es de " . $this->getLongitud() . " Cm. ";
    }
}


?>