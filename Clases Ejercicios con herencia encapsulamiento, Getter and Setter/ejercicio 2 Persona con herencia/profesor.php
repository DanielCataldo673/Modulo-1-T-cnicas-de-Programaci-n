<?php

require_once "persona.php";

class Profesor extends Persona {
    public string $clase = "Profesor";

    //metodo

    public function Especialidad(){
        return "Una profesora llamada " . $this->getNombre() . " de " . $this->getEdad() . " años tiene como especialidad " . $this->getEspecialidad();
    }
}


?>