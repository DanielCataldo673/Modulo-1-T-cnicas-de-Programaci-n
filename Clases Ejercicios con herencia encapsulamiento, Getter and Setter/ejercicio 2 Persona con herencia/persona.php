<?php
//Crear la clase 
class Persona {

    //atributos
    //tipados o no
    private string $nombre;
    private int $edad;
    private int $matricula;
    private string $especialidad;
    public string $clase = "Persona";

    //Metodo Constructor = se ejecuta cuando se instancia la clase
     public function __construct($nombre, $edad, $matricula, $especialidad)
     {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->matricula = $matricula;
        $this->especialidad = $especialidad;

     }
      
     /* GETTER AND SETTER */

    public function getNombre() {
      return $this->nombre;
  }

  public function setNombre($nombre) {
       $this->nombre= $nombre;
  }


  public function getEdad() {
      return $this->edad;
  }

  public function setEdad($edad) {
          $this->edad = $edad;
  }

  public function getMatricula() {
   return $this->matricula;
}

public function setMatricula($matricula) {
    $this->matricula= $matricula;
}


public function getEspecialidad() {
   return $this->especialidad;
}

public function setEspecialidad($especialidad) {
       $this->especialidad = $especialidad;
}

     //metodos 

     public function Informacion(){
        return "Informacion: " . " Nombre: " . $this->getNombre() . ", Edad: " .  $this->getEdad() . " años.";
     }


}



?>