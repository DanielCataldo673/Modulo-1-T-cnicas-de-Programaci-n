<?php


//Crear la clase 

class Producto {
    //atributos
    //tipados o no
    private string $nombre;
    private int $precio;
    private int $nuevoPrecio;



    //Metodo Constructor 

    public function __construct($nombre, $precio, $nuevoPrecio){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->nuevoPrecio = $nuevoPrecio;
    }
    
      /* GETTER AND SETTER */

      public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre= $nombre;
    }


    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function getNuevoPrecio() {
        return $this->nuevoPrecio;
    }

    public function setNuevoPrecio($nuevoPrecio) {
        $this->nuevoPrecio = $nuevoPrecio;
    }
     //metodos

    public function informacion() {
        echo "El nombre de este producto es " . $this->nombre . "<br>", "<br>";
        echo " Su precio es $" . $this->precio . "<br>";
        
    }

    public function nuevoPrecio() {
        echo "El nuevo precio de este producto sera $" . $this->nuevoPrecio . "<br>";
        
    }
     
    


}


?>