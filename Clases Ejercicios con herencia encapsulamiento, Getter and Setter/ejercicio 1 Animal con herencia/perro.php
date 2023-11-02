<?php
require_once "animal.php";

class Perro extends Animal {
    public string $clase = "Perro";
    

    public function razaPerro() {
        return "El perro llamado " . $this->getNombre() . " es de la raza " . $this->getRaza();
    }
}

?>