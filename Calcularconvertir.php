<?php
//require_once 'Valor.php';
//class Calcularconvertir extends Valor{

if (isset($_POST["btncalcular"]))
{
      require_once 'Valor.php';
    require_once 'Digitobinario.php';
    require_once 'Byte.php';
    require_once 'Kilobyte.php';
    require_once 'Megabyte.php';
  require_once 'GigaByte.php';
  require_once 'Terabyte.php';


    $digitobinario = new Digitobinario();
    $byte = new Byte();
    $kilobyte = new Kilobyte();
    $megabyte = new Megabyte();
    $gigabyte = new GigaByte();
    $terabyte = new Terabyte();

    $valor = $_POST["txtvalor"];

    $tipomedida = $_POST["selconversion"];
    $opcion = $_POST["medidas"];

    switch( $tipomedida){

        case "digito":
            $digitobinario->setValor($valor);
            switch($opcion){
                
               case "Byte":
                    echo "La conversión de digito binario a byte es " . $digitobinario->calcularDigitobinarioAbyte();
                break;

               case "kilo":
                    echo "La conversión de digito binario a kilobyte es " . $digitobinario->calcularDigitobinarioAKilobyte();
                break;
                case "Mega":
                    echo "La conversión de digito binario a megabyte es " . $digitobinario->calcularDigitobinarioAMegabyte();
                break;
                case "giga":
                    echo "La conversión de digito binario a gigabyte es " . $digitobinario->calcularDigitobinarioAGigabyte();
                break;
                 case "tera":
                    echo "La conversión de digito binario a terabyte es " . $digitobinario->calcularDigitobinarioATerabyte();
                break;
               
                default:
                    echo "Imposible calcular";

            }

        break;

        case "byte":  
           $byte->setValor($valor);
            switch($opcion){
                
               

               case "digito":
                    echo "La conversión de byte a digito binario es " . $byte->calcularByteADigitobinario();
                break;

               case "kilo":
                    echo "La conversión de byte a kilobyte es " . $byte->calcularByteAKilobyte();
                break;
                case "Mega":
                    echo "La conversión de byte a megabyte es " . $byte->calcularByteAMegabyte();
                break;
                case "giga":
                    echo "La conversión de byte a gigabyte es " . $byte->calcularByteAGigabyte();
                break;
                 case "tera":
                    echo "La conversión de byte a terabyte es " . $byte->calcularByteATerabyte();
                break;

                default:
                    echo "Imposible calcular";

            }
        break;

            case "kilo":  
           $kilobyte->setValor($valor);
            switch($opcion){
                
               

               case "digito":
                    echo "La conversión de kilobyte a digito binario es " . $kilobyte->calcularKilobyteADigitobinario();
                break;
               case "byte":
                    echo "La conversión de kilobyte a byte es " . $kilobyte->calcularKilobyteAByte();
                break;
                case "Mega":
                    echo "La conversión de kilobyte a megabyte es " . $kilobyte->calcularKilobyteAMegabyte();
                break;
                case "giga":
                    echo "La conversión de kilobyte a gigabyte es " . $kilobyte->calcularKilobyteAGigabyte();
                break;
                 case "tera":
                    echo "La conversión de kilobyte a terabyte es " . $kilobyte->calcularKilobyteATerabyte();
                break;

                default:
                    echo "Imposible calcular";

            }
        break;
          case "Mega":  
           $megabyte->setValor($valor);
            switch($opcion){
                
               

               case "digito":
                    echo "La conversión de megabyte a digito binario es " . $megabyte->calcularMegabyteDigitobinario();
                break;
               case "byte":
                    echo "La conversión de megabyte a byte es " . $megabyte->calcularMegabyteAByte();
                break;
                case "kilo":
                    echo "La conversión de megabyte a kilobyte es " . $megabyte->calcularMegabyteAKilobyte();
                break;
                case "giga":
                    echo "La conversión de megabyte a gigabyte es " . $megabyte->calcularMegabyteAGigabyte();
                break;
                 case "tera":
                    echo "La conversión de megabyte a terabyte es " . $megabyte->calcularMegabyteATerabyte();
                break;

                default:
                    echo "Imposible calcular";

            }
        break;
        case "giga":  
           $gigabyte->setValor($valor);
            switch($opcion){
                
               

               case "digito":
                    echo "La conversión de gigabyte a digito binario es " . $gigabyte->calcularGigaByteADigitobinario();
                break;
               case "byte":
                    echo "La conversión de gigabyte a byte es " . $gigabyte->calcularGigaByteAByte();
                break;
                case "kilo":
                    echo "La conversión de gigabyte a kilobyte es " . $gigabyte->calcularGigaByteAKilobyte();
                break;
                case "mega":
                    echo "La conversión de gigabyte a megabyte es " . $gigabyte->calcularGigaByteAMegabyte();
                break;
                 case "tera":
                    echo "La conversión de gigabyte a terabyte es " . $gigabyte->calcularGigaByteATerabyte();
                break;

                default:
                    echo "Imposible calcular";
            }
        break;
 case "tera":  
           $terabyte->setValor($valor);
            switch($opcion){
               case "digito":
                    echo "La conversión de terabyte a digito binario es " . $terabyte->calcularTeraByteADigitobinario();
                break;
               case "byte":
                    echo "La conversión de terabyte a byte es " . $terabyte->calcularTeraByteAByte();
                break;
                case "kilo":
                    echo "La conversión de terabyte a kilobyte es " . $terabyte->calcularTeraByteAKilobyte();
                break;
                case "mega":
                    echo "La conversión de terabyte a megabyte es " . $terabyte->calcularTeraByteAMegabyte();
                break;
                 case "giga":
                    echo "La conversión de terabyte a gigabyte es " . $terabyte->calcularTeraByteAGigabyte();
                break;
                default:
                    echo "Imposible calcular";
            }
        break;

        default:
        echo "Opción incorrecta";
    }
}else{
    echo "Acceso no permitido.";
}
header("Refresh: 5; URL='Conversion.php'");
  //}
?>