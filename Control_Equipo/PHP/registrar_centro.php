<?php


$centro  = $_POST['name_centro'];


require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO departamento (ID_DEPTO,DEPARTAMENTO) VALUES (".'NULL'.",'".$centro ."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>