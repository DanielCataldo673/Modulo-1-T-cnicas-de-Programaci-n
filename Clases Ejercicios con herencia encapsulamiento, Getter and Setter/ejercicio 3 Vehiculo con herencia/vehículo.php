<?php
//Crear la clase 
class Vehículo {

    //atributos
    //tipados o no
    private string $marca;
    private string $modelo;
    private int $numeroPuertas;
    private int $cilindrada;
    public string $clase = "Vehiculo";

    //Metodo Constructor = se ejecuta cuando se instancia la clase
     public function __construct($marca, $modelo, $numeroPuertas, $cilindrada)
     {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numeroPuertas = $numeroPuertas;
        $this->cilindrada = $cilindrada;

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

  public function getNumeroPuertas() {
   return $this->numeroPuertas;
}

public function setNumeroPuertas($numeroPuertas) {
    $this->numeroPuertas= $numeroPuertas;
}


public function getCilindrada() {
   return $this->cilindrada;
}

public function setCilindrada($cilindrada) {
       $this->cilindrada = $cilindrada;
}

     //metodos 

     public function Informacion(){
        return "Informacion: " . " Marca: " . $this->getMarca() . ", Modelo: " .  $this->getModelo();
     }


}



?>