<?php


$depto  = $_POST['name_prov'];


require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO departamento (ID_DEPTO,DEPARTAMENTO) VALUES (".'NULL'.",'".$depto ."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>