<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM marca");

$lista_marca .= '<select name="marca">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_marca .= '<option value='.$fila['ID_MARCA'].'>'. $fila['MARCA'].'</option> ';
				
	};
	
$lista_marca .= '</select>';	
	
	
echo $lista_marca;
	
mysqli_close($conexion_BD);

 ?>
