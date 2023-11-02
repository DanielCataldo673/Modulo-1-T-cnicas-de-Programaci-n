<?php 


//clase 
class Libro{
    //atributos
    //tipados o no
    private string $titulo;
    private string $autor;


    //Metodo Constructor 

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;

    }

    /* GETTER AND SETTER */

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
         $this->titulo= $titulo;
    }


    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
            $this->autor = $autor;
    }
    //metodos

    public function titulo() {
        echo " El titulo del libro es " . $this->titulo . "<br>";
      
    }

    public function autor() {
        echo " El autor del libro es " . $this->autor . "<br>";

    }

    

}



?>