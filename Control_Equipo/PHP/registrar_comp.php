<?php


$comp = $_POST['name_comp'];


require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO compania (ID_COMP,COMPANIA) VALUES (".'NULL'.",'".$comp."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>