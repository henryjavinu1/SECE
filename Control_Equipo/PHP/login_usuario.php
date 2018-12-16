
<?php

@error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );

$user = $_POST['usuario'];
$contra = $_POST['pass'];


require "conexion_BD.php";
	
		$consulta = mysqli_query ($conexion_BD,"SELECT *FROM usuario WHERE usuario.USER = '$user' AND usuario.CONTRA = '$contra'")or die('TENGO UN ERROR: '.mysql_error());
	
		$fila = mysqli_fetch_assoc($consulta);
		
		$user_name = $fila['USER'];
		$nombres_user = $fila['FIRTS_NAME'];
		$apellido_user = $fila['LAS_NAME'];
		$range = $fila ['ID_RANGE'];

if ($user_name)
	{
		session_start(); 
		
		
		$_SESSION['USER'] = $user_name;
		$_SESSION['FIRTS_NAME'] = $nombres_user;
		$_SESSION['LAS_NAME'] = $apellido_user;
		$_SESSION['ID_RANGE'] = $range;
		
		
		
header('Location: sece_principal.php');
	
	};
/*	
	else
		{
	 echo "
		<html>
			<head>
				<meta http-equiv='REFRESH' content='0 ; url=../index.php'>
			<script>
				alert ('Usuario No Existe');
			</script>
			</head>
		</html>
		
		";	
	
		}
*/



mysql_free_result($consulta);
mysqli_close($conexion_BD);


?>