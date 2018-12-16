<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM compania");

$lista_com .= '<select name="compania">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_com .= '<option value='.$fila['ID_COMP'].'>'. $fila['COMPANIA'].'</option> ';
				
	};
	
$lista_com .= '</select>';	
	
	
echo $lista_com;
	
mysqli_close($conexion_BD);

 ?>
