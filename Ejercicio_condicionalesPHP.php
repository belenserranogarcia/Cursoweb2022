<?php

// if (condicion){
// 	// Instrucciones
// }

/* Operadores de comparacion:

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negacion

*/

/* Operadores de logicos:

&& - Evalua que se cumpla una de las dos condiciones
||, OR - Evalua que se cumpla al menos una condicion
xor - Evalua que se cumpla una y solo una condicion

*/

$color = 25;
?>

<?php if($color = 'azul'){ ?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>HAS ESCOGIDO UN COLOR!</h1>
		<p>Color AZUL escogido</p>
	</body>
	</html>
<?php } ?>

<?php if($color = 'rojo'){ ?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>HAS ESCOGIDO UN COLOR!</h1>
		<p>Color ROJO escogido</p>
	</body>
	</html>
<?php } ?>