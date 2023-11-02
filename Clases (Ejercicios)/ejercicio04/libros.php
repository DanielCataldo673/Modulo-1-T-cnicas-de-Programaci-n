<?php 


//clase 
class Libros{
    public string $titulo;
    public string $autor;
    public string $numero_de_paginas;


    //Metodo Constructor 

    public function __construct($titulo, $autor, $numero_de_paginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numero_de_paginas = $numero_de_paginas;

    }
    //metodos

    public function titulo() {
        echo " El titulo del libro es " . $this->titulo . "<br>";
      
    }

    public function autor() {
        echo " El autor del libro es " . $this->autor . "<br>";

    }

    public function numero_de_paginas() {
        echo " Su numero de páginas es de " .  $this->numero_de_paginas . "<br>";

    }


}



?>