<?php


$name_prov  = $_POST['name_prov'];
$direccion = $_POST['direccion'];
$telefono = $_POST['tel'];
$celular = $_POST['cel'];

require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO proveedores (ID_PROV,NAME_PROV,DIRECCION,TELEFONO,CELULAR) VALUES (".'NULL'.",'".$name_prov."','".$direccion."','".$telefono."','".$celular."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>