<?php 

require_once 'Valor.php';

class Kilobyte extends Valor{

    public function calcularKilobyteADigitobinario(){
        return $this->getValor() * 8000;
    }

    public function calcularKilobyteAByte(){
        return $this->getValor() * 1000;
    }

    public function calcularKilobyteAMegabyte(){
        return $this->getValor() / 1000;
    }
      public function calcularKilobyteAGigabyte(){
        return $this->getValor() / 1000000;
    }

    public function calcularKilobyteATerabyte(){
        return $this->getValor() / 1000000000;
    }
}

?>