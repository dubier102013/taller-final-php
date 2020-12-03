<?php 
require_once 'Valor.php';
require_once 'CalcularMaMe.php';
class Promedio extends Valor{
   

    public function CalcularPromedio(){
        return  "El promedio de los digitos ingresados es: ".($this->getdigito1() + $this->getdigito2() + $this->getdigito3()) / 3;
       
    }

}
?>