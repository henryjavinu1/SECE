<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM tipo");

$lista_tipo .= '<select name="tipo">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_tipo .= '<option value='.$fila['ID_TIPO'].'>'. $fila['TIPO'].'</option> ';
				
	};
	
$lista_tipo .= '</select>';	
	
	
echo $lista_tipo;
	
mysqli_close($conexion_BD);

 ?>
