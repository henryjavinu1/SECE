<?php


$ubicacion = $_POST['name_ubicacion'];


require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO ubicacion (ID_UBICACION,UBICACION) VALUES (".'NULL'.",'".$ubicacion."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>