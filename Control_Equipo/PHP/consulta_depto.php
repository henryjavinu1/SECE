<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM departamento");

$lista_depto .= '<select name="depto">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_depto .= '<option value='.$fila['ID_DEPTO'].'>'. $fila['DEPARTAMENTO'].'</option> ';
				
	};
	
$lista_depto .= '</select>';	
	
	
echo $lista_depto;
	
mysqli_close($conexion_BD);

 ?>
