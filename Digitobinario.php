<?php 

require_once 'Valor.php';

class Digitobinario extends Valor{

    public function calcularDigitobinarioAbyte(){
        return $this->getValor() / 8;
    }

    public function calcularDigitobinarioAKilobyte(){
        return $this->getValor() / 8000;
    }

    public function calcularDigitobinarioAMegabyte(){
        return $this->getValor() /  8000000;
    }
      public function calcularDigitobinarioAGigabyte(){
        return $this->getValor() / 8000000000;
    }

    public function calcularDigitobinarioATerabyte(){
        return $this->getValor() / 8000000000000;
    }
}

?>