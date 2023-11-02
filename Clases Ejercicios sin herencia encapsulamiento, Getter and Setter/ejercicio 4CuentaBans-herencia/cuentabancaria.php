<?php

//Crear la clase 

class CuentaBancaria {
    private int $saldoInicial;
    private int $saldo;
    private int $depositar;
    private int $retirar;

    //Metodo Constructor 
    
    public function __construct($saldo,$depositar,$retirar,$saldoInicial) {
        $this->saldo = $saldo;
        $this->depositar = $depositar;
        $this->retirar = $retirar;
        $this->saldoInicial = $saldoInicial;
       
    }
    
     /* GETTER AND SETTER */

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo= $saldo;


    }
    public function getDepositar() {
        return $this->depositar;
    }

    public function setDepositar($depositar) {
        $this->depositar= $depositar;

    }
    public function getRetirar() {
        return $this->retirar;
        }
    
    public function setRetirar($retirar) {
        $this->retirar= $retirar;
    
    }

    public function getSaldoInicial() {
        return $this->saldoInicial();
        }
    
    public function setSaldoInicial($saldoInicial) {
        $this->saldoInicial= $saldoInicial;
    
    }



    
    
    //metodos
    public function depositar() {
        echo " La cantidad de dinero depositado es $ " . $this->depositar . "<br>";
      
    }

    public function retirar() {
        echo " La cantidad de dinero a retirar es $ " . $this->retirar . "<br>";
    
    }

    public function saldo() {
    echo " El saldo actual es $ " . $this->saldo = ($this->depositar - $this->retirar) + $this->saldoInicial;

    }

    public function saldoInicial() {
        echo " El saldo inicial es de $ " . $this->saldoInicial;
}
}
?>
