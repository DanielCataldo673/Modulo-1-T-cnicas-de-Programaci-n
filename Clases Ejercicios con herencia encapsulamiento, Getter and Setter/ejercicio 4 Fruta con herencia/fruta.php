<?php
//Crear la clase 
class Fruta {

    //atributos
    //tipados o no
    private string $nombre;
    private string $color;
    private string $tipo;
    private int $longitud;
    public string $clase = "Fruta";

    //Metodo Constructor = se ejecuta cuando se instancia la clase
     public function __construct($nombre, $color, $tipo, $longitud)
     {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->tipo = $tipo;
        $this->longitud = $longitud;

     }
      
     /* GETTER AND SETTER */

    public function getNombre() {
      return $this->nombre;
  }

  public function setNombre($nombre) {
       $this->nombre= $nombre;
  }


  public function getColor() {
      return $this->color;
  }

  public function setColor($color) {
          $this->color = $color;
  }

  public function getTipo() {
   return $this->tipo;
}

public function setTipo($tipo) {
    $this->tipo= $tipo;
}


public function getLongitud() {
   return $this->longitud;
}

public function setLongitud($longitud) {
       $this->longitud = $longitud;
}

     //metodos 

     public function Informacion(){
        return "Informacion: " . " Nombre: " . $this->getNombre() . ", Color: " .  $this->getColor();
     }


}



?>