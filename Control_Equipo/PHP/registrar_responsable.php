<?php

$num_ced = $_POST['ID'];
$nombres  = $_POST['name'];
$apellidos = $_POST['last_name'];

require "conexion_BD.php";

$insertar = mysqli_query($conexion_BD,"INSERT INTO responsable (ID_RESP,NUM_ID,NOMBRES,APELLIDOS) VALUES (".'NULL'.",'".$num_ced."','".$nombres."','".$apellidos."')");

if ($insertar){

header('Location: sece_principal.php');

}

else

{
echo "Algo Fallo";
}



 ?>