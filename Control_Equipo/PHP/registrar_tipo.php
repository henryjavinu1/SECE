<?php


$tipo = $_POST['name_tipo'];


require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO tipo (ID_TIPO,TIPO) VALUES (".'NULL'.",'".$tipo."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>