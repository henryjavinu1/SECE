<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM centro");

$lista_centro .= '<select name="centro">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_centro .= '<option value='.$fila['ID_CENTRO'].'>'. $fila['ID_CENTRO'].' '.$fila['CENTRO'].'</option> ';
				
	};
	
$lista_centro .= '</select>';	
	
	
echo $lista_centro;
	
mysqli_close($conexion_BD);

 ?>
