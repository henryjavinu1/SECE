<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM responsable");

$lista_res .= '<select name="responsable">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_res .= '<option value='.$fila['ID_RESP'].'>'. $fila['NOMBRES'].' '.$fila['APELLIDOS'].'</option> ';
				
	};
	
$lista_res .= '</select>';	
	
	
echo $lista_res;
	
mysqli_close($conexion_BD);

 ?>
