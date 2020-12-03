<?php 

require_once 'Valor.php';

class Megabyte extends Valor{

    public function calcularMegabyteDigitobinario(){
        return $this->getValor() * 8000000;
    }

    public function calcularMegabyteAByte(){
        return $this->getValor() * 1000000;
    }

    public function calcularMegabyteAKilobyte(){
        return $this->getValor() * 1000;
    }
      public function calcularMegabyteAGigabyte(){
        return $this->getValor() / 1000;
    }

    public function calcularMegabyteATerabyte(){
        return $this->getValor() / 1000000;
    }
}

?>
