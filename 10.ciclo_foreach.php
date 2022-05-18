<?php 

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
$meses [12] = 'el mes 13';

$marc = array('telefono' => 54743221, 'edad' => 35, 'ciudad' => 'Castelldefels');
$marc ["transporte"] = 'moto';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recorrer array y array asociativo (clave => valor )también</title>
</head>
<body>
	<h1>Recorrer array y array asociativo (clave => valor) también</h1>
	<ul>
		<?php
			# Con el ciclo foreach podemos recorrer arrays de una manera muy fácil.
			foreach($meses as $mes){
			 echo '<li>' . $mes . '</li>';
			  }

			# El ciclo foreach también NOS PERMITE recorrer arrays asosiativos.
			// foreach($marc as $dato => $valor){
			// echo '<li>' . $dato . ' : ' . $valor . '</li>';
			// }

		?>
	</ul>
</body>
</html>