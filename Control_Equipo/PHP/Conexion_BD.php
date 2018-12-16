<?php 
$mysql_host = 'localhost';
$mysql_usuario = 'root';
$mysql_clave = '';
$mysql_BD = 'CONTROL_EQUIPO';


$conexion_BD = mysqli_connect($mysql_host, $mysql_usuario, $mysql_clave, $mysql_BD);

if (mysqli_connect_errno())
{
	echo "Error con la conexion" . mysqli_connect_error();
}

?>