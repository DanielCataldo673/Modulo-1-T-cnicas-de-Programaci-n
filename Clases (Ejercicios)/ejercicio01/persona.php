<?php 


//clase 
class Persona{
    public string $nombre;
    public int $edad;
    public string $ciudad;
    public int $telefono;


    //Metodo Constructor 

    public function __construct($nombre, $edad, $ciudad, $telefono) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;

    }
    //metodos

    public function informacion() {
        echo " Mi nombre es " . $this->nombre . "<br>";
        echo " Mi edad es " . $this->edad . " años" . "<br>";
        echo " Vivo en la ciudad de  " .  $this->ciudad . "<br>";
        echo " Mi telefono es " . $this->telefono . "<br>";
        
    }


}



?>