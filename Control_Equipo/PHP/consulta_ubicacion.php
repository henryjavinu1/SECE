<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM ubicacion");

$lista_ubi .= '<select name="ubicacion">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_ubi .= '<option value='.$fila['ID_UBICACION'].'>'. $fila['UBICACION'].'</option> ';
				
	};
	
$lista_ubi .= '</select>';	
	
	
echo $lista_ubi;
	
mysqli_close($conexion_BD);

 ?>
