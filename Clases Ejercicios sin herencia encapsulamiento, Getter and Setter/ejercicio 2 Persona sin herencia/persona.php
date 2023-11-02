<?php 


//Crear la clase 
class Persona{
    //atributos
    //tipados o no
    private string $nombre;
    private string $apellido;
    public int $edad;
    
    //Metodo Constructor 

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;

    }
    /* GETTER AND SETTER */

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
         $this->nombre= $nombre;
    }


    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
            $this->apellido = $apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
            $this->edad = $edad;
    }
    //metodos

    public function informacion() {
        echo " Mi nombre es " . $this->nombre . "<br>";
        echo " Mi apellido es " . $this->apellido . "<br>";
        echo " Mi edad es " . $this->edad . " años" . "<br>";
        
    }

    public function edadNegativa() {
        if($this->getEdad()< 0){
            echo  " Edad no válida, ingresar nuevamente." ;
        }else {
            
        }

        
    }
}



?>