<?php 

require_once 'Valor.php';

class Terabyte extends Valor{

    public function calcularTeraByteADigitobinario(){
        return $this->getValor() * 8000000000000;
    }

    public function calcularTeraByteAByte(){
        return $this->getValor() * 1000000000000;
    }

    public function calcularTeraByteAKilobyte(){
        return $this->getValor() * 1000000000;
    }
      public function calcularTeraByteAMegabyte(){
        return $this->getValor() * 1000000;
    }

    public function calcularTeraByteAGigabyte(){
        return $this->getValor() * 1000;
    }
}

?>