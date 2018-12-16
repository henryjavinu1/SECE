<?php 
@error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );

session_start ();


session_destroy();
echo "
		<html>
			<head>
				<meta http-equiv='REFRESH' content='0 ; url=../index.html'>
			<script>
				alert ('Sesion Terminada');
			</script>
			</head>
		</html>
		
		";	

?>