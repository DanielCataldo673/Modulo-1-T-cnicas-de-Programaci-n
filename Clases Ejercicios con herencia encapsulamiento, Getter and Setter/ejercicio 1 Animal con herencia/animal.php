<?php

//Crear la clase 

class Animal{
    //atributos
    //tipados o no
    private string $nombre;
    private string $raza; 
    public string $clase = "Animal";


    //Metodo Constructor = se ejecuta cuando se instancia la clase

    public function __construct($nombre, $raza){
        $this->nombre = $nombre;
        $this->raza = $raza;
    }

    /* GETTER AND SETTER */

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
         $this->nombre= $nombre;
    }


    public function getRaza() {
        return $this->raza;
    }

    public function setRaza($raza) {
            $this->raza = $raza;
    }



    

    //metodos

    public function Saludar() {
        return "Hola mi nombre es " . $this->getNombre();
    }

    

}





?>