<?php 

$hora = '14:00';
// $verdadero = true;

// if ($verdadero) {
// 	echo "Verdadero";
// } else {
// 	echo "Falso";
// }

if ($hora >= '15:00' && $hora <='20:00') 
{
	$mensaje = "Estamos en clase";
} 
 else {
	$mensaje = "No estamos en clase ETIf";
}
echo $mensaje;


 ?>