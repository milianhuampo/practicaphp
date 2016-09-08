<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	



<?php 
$rows = array(
array(  'nombre' => 'OBDELIA', 'apellidos' => 'QUISPE TOLA', 'telefono' => '67086944'),
array('nombre' => 'LUIS', 'apellidos' => 'CHOQUE MAMANI', 'telefono' => '56879378'),
array('nombre' => 'DIANA', 'apellidos' => 'MENDOZA SILLERO', 'telefono' => '70505262'),
array('nombre' => 'MARIA', 'apellidos' => 'CHOQUE CARVAJAL', 'telefono' => '70504067')
);
foreach($rows as $valor) {
echo 'NOMBRE: ' . $valor['nombre'] . '<br />'; 
echo 'APELLIDOS: ' . $valor['apellidos'] . '<br />';
}
?>




	<!--SEGUNDA FORMA-->
<?php
$estacion[0] = "Primavera";
$estacion[1] = "Verano";
$estacion[2] = "Otoño";
$estacion[3] = "Invierno";
foreach($estacion as $valor) {   
echo 'ESTACION: '. $valor.'<br/>'; 
}
?>
</body>
</html>