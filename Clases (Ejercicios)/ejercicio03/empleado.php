<?php


//clase 

class Empleado {
    //atributos
    public string $nombre;
    public int $salario;
    public string $fecha_de_contratacion;
    



    //Metodo Constructor 

    public function __construct($nombre, $salario, $fecha_de_contratacion){
        $this->nombre = $nombre;
        $this->salario = $salario;
        $this->fecha_de_contratacion = $fecha_de_contratacion;
        
    }
    

     //metodos

    public function informacion() {
        echo "El nombre del empleado es : " . $this->nombre . "<br>";
        echo " Su fecha de contratación es el  " .  $this->fecha_de_contratacion . "<br>";
        echo " Su salario es de : $" . $this->salario . "<br>";
        
        
    }
     
    public function salario_anual (){
        echo "El salario anual es de : $ " . $this->salario * 12;


}
    public function darAumento($porcentaje_aumento) {
        echo ". Su aumento es de: $". $this->salario = $this->salario *   ($porcentaje_aumento / 100);
}
}
?>