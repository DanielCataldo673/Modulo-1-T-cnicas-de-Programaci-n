<?php


//Crear la clase 

class Coche {
    //atributos
    //tipados o no
    private string $marca;
    private string $modelo;



    //Metodo Constructor 

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }
    
      /* GETTER AND SETTER */

      public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
         $this->marca= $marca;
    }


    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
            $this->modelo = $modelo;
    }
     //metodos

    public function informacion() {
        echo "Este es un auto de la marca : " . $this->marca . "<br>";
        echo " Su modelo es : " . $this->modelo . "<br>";
        
    }
     
    


}


?>