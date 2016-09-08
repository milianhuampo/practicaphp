<?php

$usuario=RUTH;
$pass=123;

$u=$_POST['usr'];// RECURERA DATOS DEL FORMULARIO
$p=$_POST['pwd'];



if($usuario ==$u && $pass ==$p)

	{
		
				
			header("location:ejercicio10-2.php");


	
	}
	else
	{
		
			header("location:ejercicio10.php");	//vuenve a la pagina de logueo	
    }
?>
