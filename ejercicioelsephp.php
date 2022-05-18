<?php 

$mes = 'Agosto';
// $verdadero = true;

// if ($verdadero) {
// 	echo "Verdadero";
// } else {
// 	echo "Falso";
// }

if ($mes == 'Junio') {
	$saludo = "Feliz San Juan";
} else if($mes == 'Agosto' or $mes == 'Julio'){
	$saludo = "Buenas vacaciones";
} else {
	$saludo = "Ánimo, que ya queda poco";
}
echo $saludo;

 ?>