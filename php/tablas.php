<link rel="stylesheet" href="../css/style.css">

<?php

$bandera=($_POST["opcion"]);

tablasmultiplicar($bandera);


function tablasmultiplicar($bandera){
		
if($bandera=="Crear_tablas_for"){

	echo "Usted eligio la opción : ".$bandera;
	echo "<br>";
	echo "<table border=4>";
		for ($i = 1; $i <= 10; $i++) {
		
			echo"<td>";
			echo "<table border=2>";
			echo "<tr><td colspan=5>Tabla del ".$i."</td></tr>";
	
		for ($j = 1; $j <= 10; $j++) {
			echo "<tr><td>".$i."x".$j."=".$i*$j."</td></tr>";
    	
		}
	
			echo "</table>";
		}
			echo"</td>";
	echo"</table>";
}


elseif ($bandera=="Crear_Tablas_while") {

	echo "Usted eligio la opción : ".$bandera;
	echo "<br>";
	echo "<table border=4>";
	$i=1;
	while($i<=10){
		echo"<td>";
		echo "<table border=2><tr><td colspan=5>Tabla del ".$i."</td></tr>";
			$j=1;
				while($j<=10){
					
					echo "<tr><td>".$i." x ".$j." = ".$i*$j."</td></tr>";
					$j++;
				}
		echo "</table>";
		$i++;
		echo"<td>";
}

	echo"</table>";
	
}

elseif ($bandera=="Crear_Tablas_do_while") {
	echo "Usted eligio la opción : ".$bandera;
	echo "<br>";
	echo "<table border=4>";
		$i=1;
		do{
			echo"<td>";
			echo "<table border=3><tr><td colspan=5>Tabla del ".$i."</td></tr>";
				$j=1;

				do{

					
					echo "<tr><td>".$i."x ".$j." = ".$i*$j."</td></tr>";
					$j++;

				}while($j<=10);

			echo "</table>";
					$i++;
			echo"<td>";

		}while($i<=10);
			
	echo"</table>";
}
echo"<a href=examen.html><p> REGRESAR </a></p>";




}


?>
