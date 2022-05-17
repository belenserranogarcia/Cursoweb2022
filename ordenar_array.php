<?php


$diasemana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 
'Viernes', 'Sábado', 'Domingo');
//  
// sort($diasemana);
// rsort($diasemana);

//Función del array que queremos ordenar
// rsort($meses); Inverso del array
// rsort($numeros);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dias de la semana</title>
</head>
<body>
	<h1>Dias de la semana</h1>
	<ul>
		<?php
			foreach($diasemana as $dia){
				echo '<li>' . $dia . '</li>';
			}
			rsort($diasemana);
		?>
		<br>
		<?php
			foreach($diasemana as $dia){
				echo '<li>' . $dia . '</li>';
			}
			sort($diasemana);
		?>
		<br>
		<?php
			foreach($diasemana as $dia){
				echo '<li>' . $dia . '</li>';
			}
		?>
	</ul>
</body>
</html>