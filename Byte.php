<?php 

require_once 'Valor.php';

class Byte extends Valor{

    public function calcularByteADigitobinario(){
        return $this->getValor() * 8;
    }

    public function calcularByteAKilobyte(){
        return $this->getValor() / 1000;
    }

    public function calcularByteAMegabyte(){
        return $this->getValor() / 1000000;
    }
      public function calcularByteAGigabyte(){
        return $this->getValor() / 1000000000;
    }

    public function calcularByteATerabyte(){
        return $this->getValor() / 1000000000000;
    }
}

?>