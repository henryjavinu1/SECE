<?php


$estado = $_POST['name_estado'];


require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO estado (ID_ESTADO,ESTADO) VALUES (".'NULL'.",'".$estado."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>