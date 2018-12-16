<?php


$marca = $_POST['name_marca'];


require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO marca (ID_MARCA,MARCA) VALUES (".'NULL'.",'".$marca."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>