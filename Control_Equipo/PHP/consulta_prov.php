<?php

error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM proveedores");

$lista_prov .= '<select name="prov">';

while ($fila = mysqli_fetch_assoc($resultado))
	{		
		$lista_prov .= '<option value='.$fila['ID_PROV'].'>'. $fila['NAME_PROV'].'</option> ';
				
	};
	
$lista_prov .= '</select>';	
	
	
echo $lista_prov;
	
mysqli_close($conexion_BD);

 ?>
