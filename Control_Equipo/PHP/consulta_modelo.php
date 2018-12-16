<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM modelo");

$lista_mod .= '<select name="modelo">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_mod .= '<option value='.$fila['ID_MOD'].'>'. $fila['MODELO'].'</option> ';
				
	};
	
$lista_mod .= '</select>';	
	
	
echo $lista_mod;
	
mysqli_close($conexion_BD);

 ?>
