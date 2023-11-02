<?php


//Crear la clase 

class Empleado {
    //atributos
    //tipados o no
    private string $nombre;
    private int $sueldo;
    private int $nuevoSueldo;



    //Metodo Constructor 

    public function __construct($nombre, $sueldo, $nuevoSueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->nuevoSueldo = $nuevoSueldo;
    }
    
      /* GETTER AND SETTER */

      public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre= $nombre;
    }


    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getNuevoSueldo() {
        return $this->nuevoSueldo;
    }

    public function setNuevoSueldo($nuevoSueldo) {
        $this->nuevoSueldo = $nuevoSueldo;
    }
     //metodos

    public function informacion() {
        echo "El nombre de este empleado es " . $this->nombre . "<br>", "<br>";
        echo " Su sueldo es $" . $this->sueldo . "<br>";
        
    }

    public function nuevoSueldo() {
        echo "El nuevo sueldo sera de $" . $this->nuevoSueldo . "<br>";
        
    }
     
    


}


?>