<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SECE</title>
<link rel="stylesheet" href="CSS/Login_usuario.css" />
</head>

<body>
	
	<div id="contenedor">
	
	<div id="login"><label>.::: Inicio de Sesion :::.</label></div>
	
		<form id="login_usuario" name="login_usuario" method="post" action="PHP/login_usuario.php">
		
			<label id="lbl_usua">Usuario</label>	<input type="text" name="usuario" id="ipt_nombre" value="Ingrese Nombre" />
			
			<label id="lbl_pass">Password</label> <input type="password" name="pass" id="ipt_pass" value="password" />
			
			<input type="submit" name="enviar_login" id="enviar_login" value="Enviar registro" />		
		</form>
	</div>

</body>
</html>
