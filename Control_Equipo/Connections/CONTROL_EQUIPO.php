<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_CONTROL_EQUIPO = "localhost";
$database_CONTROL_EQUIPO = "CONTROL_EQUIPO";
$username_CONTROL_EQUIPO = "root";
$password_CONTROL_EQUIPO = "";
$CONTROL_EQUIPO = mysql_pconnect($hostname_CONTROL_EQUIPO, $username_CONTROL_EQUIPO, $password_CONTROL_EQUIPO) or trigger_error(mysql_error(),E_USER_ERROR); 
?>