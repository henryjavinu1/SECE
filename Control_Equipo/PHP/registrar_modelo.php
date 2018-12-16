<?php


$modelo = $_POST['name_modelo'];


require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO modelo (ID_MOD,MODELO) VALUES (".'NULL'.",'".$modelo."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>