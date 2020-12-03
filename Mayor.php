<?php 

class Mayor extends Valor{
   
    public function CalcularMayor(){
        
        if ($this->getdigito1() > $this->getdigito2() & $this->getdigito1() > $this->getdigito3())
        {
            return "El digito Mayor es el 1 con un valor de :". $this->getdigito1();
        }
        else{
            if($this->getdigito2() > $this->getdigito1() & $this->getdigito2() > $this->getdigito3())
            {
                return "El digito Mayor es el 2 con un valor de :". $this->getdigito2();
            }
            else{
                if($this->getdigito3() > $this->getdigito1() & $this->getdigito3() > $this->getdigito2())
                {
                    return "El digito Mayor es el 3 con un valor de :". $this->getdigito3();
                }
                else{
                    return "Hay digitos iguales no se puede validar :";
                }
            }
        }
        
        
        }
        
        
        }







?>