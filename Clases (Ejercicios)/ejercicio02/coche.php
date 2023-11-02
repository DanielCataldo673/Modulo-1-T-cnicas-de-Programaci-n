<?php


//clase 

class Coche {
    //atributos
    public string $marca;
    public string $modelo;
    public int $anio;



    //Metodo Constructor 

    public function __construct($marca, $modelo, $anio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }
    

     //metodos

    public function informacion() {
        echo "Este es un auto de la marca : " . $this->marca . "<br>";
        echo " Su modelo es : " . $this->modelo . "<br>";
        echo " Su año de producción es : " .  $this->anio . "<br>";
        
    }
     
    public function acelerar(){
        echo "Este coche {$this->marca} {$this->modelo} {$this->anio} es el unico que puede acelerar.";

} 


}


?>