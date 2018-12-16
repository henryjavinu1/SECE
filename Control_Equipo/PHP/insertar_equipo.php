<?php 
require "conexion_BD.php";




	$serie = $_POST['serie'];
	$nm_equipo = $_POST['name'];
	$estado = $_POST['estado'];
	$responsable = $_POST['responsable'];
	$fecha = $_POST['fecha'];
	$compania = $_POST['compania'];
	$depto = $_POST['depto'];
	$tipo = $_POST['tipo'];
	$ubicacion = $_POST['ubicacion'];
	$centro = $_POST['centro'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$ip = $_POST['ip'];
	$mac_wifi = $_POST['mac_wifi'];
	$mac_ether = $_POST['mac_ether'];
	$prov = $_POST['prov'];
	$so = $_POST['so'];
	

$insertar = mysqli_query($conexion_BD,"INSERT INTO equipo 
(`CORRELATIVO`,`SERIE`,`NOMBRE_EQUIPO`,`ID_ESTADO`,`ID_RESP`,`FECHA_INGRESO`,`ID_COMP`,`ID_DEPTO`,`ID_TIPO`,`ID_UBICACION`,`ID_CENTRO`,`ID_MARCA`,`ID_MOD`,`IP_DIR`,`MAC_WIFI`,`MAC_ETH`,`ID_PROV`,`S.O`) 
	VALUES 
(".'NULL'.",'".$serie."','".$nm_equipo."','".$estado."','".$responsable."','".$fecha."','".$compania."','".$depto."','".$tipo."','".$ubicacion."','".$centro."','".$marca."','".$modelo."','".$ip."','".$mac_wifi."','".$mac_ether."','".$prov."','".$so."')");

echo $serie ." -->";
echo $nm_equipo ." -->";
echo $estado ." -->";
echo $responsable ." -->";
echo $fecha ." -->";
echo $compania ." -->";
echo $depto ." -->";
echo $tipo ." -->";
echo $ubicacion ." -->";
echo $centro ." -->";
echo $marca ." -->";
echo $modelo ." -->";
echo $ip ." -->";
echo $mac_wifi ." -->";
echo $mac_ether ." -->";
echo $prov ." -->";
echo $so ." -->";

if ($insertar){
header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}

	
?>