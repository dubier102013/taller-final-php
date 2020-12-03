<?php 
if (isset($_POST["btncalcularmame"]))
{
    
    require_once 'Valor.php';
    require_once 'Menor.php';
    require_once 'Mayor.php';
    require_once 'Promedio.php';

$OMayor = new Mayor();
$OMenor = new Menor();
$OPromedio = new Promedio();

$valor1 = $_POST["txtvalor1"];
$valor2 = $_POST["txtvalor2"];
$valor3 = $_POST["txtvalor3"];


$OMayor->setdigito1($valor1);
$OMayor->setdigito2($valor2);
$OMayor->setdigito3($valor3);

$OMenor->setdigito1($valor1);
$OMenor->setdigito2($valor2); 
$OMenor->setdigito3($valor3);

$OPromedio->setdigito1($valor1); 
$OPromedio->setdigito2($valor2); 
$OPromedio->setdigito3($valor3); 


echo "" .$OMenor->CalcularMenor();
echo "<br>";
echo "<br>";
echo "" .$OMayor->CalcularMayor();
echo "<br>";
echo "<br>";
echo "" . $OPromedio->CalcularPromedio();

}
else{
    echo "Acceso no permitido.";
}
header("Refresh: 10; URL='MayorMenor.php'");
?>