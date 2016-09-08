<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	
	<link rel="stylesheet" type="text/css" href="estilos.css" />

</head>

<body>

<?php


if ($gestor = opendir('fotos'))		//ABRE EL GESTOR DE DIRECTORIO DE LA CARPETA FOTOS Y LO ALMACENA EN LA VARIABLE $GESTOR SOLO CON ESTA CENTENCIA
{
 echo "<table border=1>";
 echo "<tr>";
 $i=0;

 while (false !== ($archivo = readdir($gestor))) 
 {
 		if ($archivo!="." && $archivo!="..")
 		{

 			if ($i==4)
 			{
				 $i=0;
 			  	echo "</tr>";
				 echo "<tr>";
 			}
 			$i++;
 			echo "<td>";
 			echo "<a href=fotos/$archivo><img src=fotos/$archivo width='200px'> 
			</a>";
		 	echo "</td>";
 		}
 }
 echo "</tr>";
 echo "</table>";
 closedir($gestor);
}
?>

</body>
</html>