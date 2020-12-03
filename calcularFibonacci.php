<?php 

	if (isset($_POST["btncalcularFibo"]))
	{
	
	$valor = $_POST["txtvalorfibo"];

	$n1=1;
     $n2=0;

    for($i=0;$i<=$valor;$i++){

    $suma=$n1+$n2;
    $n1=$n2;
    $n2=$suma;
     echo $suma."<br/>";
     }
	}
	else{
		echo "Acceso no permitido.";
	}
	header("Refresh: 5; URL='Fibonacci.php'");
?>

