<?php 

if (isset($_POST["btncalcularfac"]))
	{
	
    $valor = $_POST["txtvalorfacto"];
    if($valor>0){

	$factorial=1;

    for($i=1;$i<=$valor;$i++){

        $factorial= $factorial * $i;
     echo $factorial."<br/>";
     }
    }
	}
	else{
		echo "Acceso no permitido.";
	}
    header("Refresh: 5; URL='Factorial.php'");

?>