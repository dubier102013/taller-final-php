<?php 

require_once 'Valor.php';

class GigaByte extends Valor{

    public function calcularGigaByteADigitobinario(){
        return $this->getValor() * 8000000000;
    }

    public function calcularGigaByteAByte(){
        return $this->getValor() * 1000000000;
    }

    public function calcularGigaByteAKilobyte(){
        return $this->getValor() * 1000000;
    }
      public function calcularGigaByteAMegabyte(){
        return $this->getValor() * 1000;
    }

    public function calcularGigaByteATerabyte(){
        return $this->getValor() / 1000;
    }
}

?>