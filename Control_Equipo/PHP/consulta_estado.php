<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM estado");

$lista_esta .= '<select name="estado">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_esta .= '<option value='.$fila['ID_ESTADO'].'>'. $fila['ESTADO'].'</option> ';		
	};
	
$lista_esta .= '</select>';	
	
	
echo $lista_esta;
	
mysqli_close($conexion_BD);

 ?>
