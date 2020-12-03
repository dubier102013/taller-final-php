<?php 
class Valor{

    private $valor,$digito1,$digito2,$digito3;

    public function __construct(){
        $this->valor = 0;
    }

    public function setdigito1($value){
        $this->digito1 = $value;
    }

    public function getdigito1(){
        return $this->digito1;
    }

public function setdigito2($value){
        $this->digito2 = $value;
    }

    public function getdigito2(){
        return $this->digito2;
    }
public function setdigito3($value){
        $this->digito3= $value;
    }

    public function getdigito3(){
        return $this->digito3;
    }
public function setValor($value){
        $this->valor = $value;
    }

    public function getValor(){
        return $this->valor;
   
}


}
?>