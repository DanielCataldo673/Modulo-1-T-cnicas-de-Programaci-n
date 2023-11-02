<?php
require_once "persona.php";

class Estudiante extends Persona {
    public string $clase = "Estudiante";

    //metodo

    public function Matricula(){
        return "Un estudiante llamado " . $this->getNombre() ." de " . $this->getEdad() . " años tiene como de matrícula el numero " . $this->getMatricula();
    }
}


?>