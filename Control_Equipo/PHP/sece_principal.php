<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-type" content="text/html; utf-8">
<link rel="stylesheet" href="../CSS/Principal.css" />

<title>SECE</title>

<script type="text/javascript">
function mostrarVentana()
{
    var ventana = document.getElementById('miVentana'); // Accedemos al contenedor
    ventana.style.marginTop = "5%"; // Definimos su posición vertical. La ponemos fija para simplificar el código
   // ventana.style.marginLeft = ((document.body.clientWidth-350) / 2) +  "px"; // Definimos su posición horizontal
    ventana.style.display = 'block'; // Y lo hacemos visible
}

function ocultarVentana()
{
    var ventana = document.getElementById('miVentana'); // Accedemos al contenedor
    ventana.style.display = 'none'; // Y lo hacemos invisible
}
</script>
</head>

<body>
<!--ventana modal nuevo usuario -->
<div id="miVentana" style="display:none; position:fixed">

	 <div style="font-weight: bold; text-align: left; color: #FFFFFF; padding: 5px; background-color:#006394">AGREGAR NUEVOS EQUIPOS</div>
 
 		<div id="contenido_modal">
 	
			<form method="post" action="insertar_equipo.php" id="ins_equip">
		
		<div> 
			<label id="tit_div_mod">Datos Generales</label><br />
			
			<label>Serie</label>
			<input id= "cajas_equi" type="text" name="serie" /><br />
			
			<label>Nombre Equipo</label>
			<input id= "cajas_equi" type="text" name="name" /><br />
			
			<label>Estado</label>
			<?php include 'consulta_estado.php';?>	<br />
			
			<label>Responsable</label>
			<?php include 'consulta_responsable.php'; ?> <br />
			
			<label>Fecha Ingreso</label>
			<input type="date" id= "cajas_equi" name="fecha" /><br />
			
			<label>Tipo</label>
			<?php include 'consulta_tipo.php'; ?> <br />
			
			<label>Marca</label>
			<?php include 'consulta_marca.php'; ?> <br />
			
			<label>Modelo</label>
			<?php include 'consulta_modelo.php'; ?> <br />
			
			<label>Proveedor</label>
			<?php include 'consulta_prov.php'; ?> <br />
			
			<label>Sistema Operativo</label>
			<input id= "cajas_equi" type="text" name="so" /><br />
		
		</div>
			
			
			
		<div>	
			<label id="tit_div_mod">Datos de Ubicacion</label><br />
			
			<label>Compania</label>
			<?php include 'consulta_compania.php'; ?> <br />
			
			<label>Departamento</label>
			<?php include 'consulta_depto.php'; ?> <br />
			
			<label>Ubicacion</label>
			<?php include 'consulta_ubicacion.php'; ?> <br />
			
			<label>Centro</label>
			<?php include 'consulta_centro.php'; ?> <br />
			
		</div>
		
		<div>
			<label id="tit_div_mod">Red</label><br />
			<label>Direccion IP</label>
			<input id= "cajas_equi" type="text" name="ip" /><br />
			
			<label>Mac WIF</label>
			<input id= "cajas_equi" type="text" name="mac_wifi" /><br />
			
			<label>Mac Ethernet</label>
			<input id= "cajas_equi" type="text" name="mac_ether" /><br />
			
			<input id="btnAceptar_add" type="submit" value="Agregar Equipo" />
			
</div>	
			
	</form>
 
 </div>
<div style="float:left; width:100%; background-color: #F0F0F0; text-align: center; margin-top: 2%;"><input id="btnAceptar" onClick="ocultarVentana();" name="btnAceptar" size="20" type="button" value="CERRAR" /></div>
</div>
<!-- Fin de ventana Modal-->


<!-- Nueva Ventana Modal insertar responsables-->
<?php 
	 	include 'insertar_res.php';
?>
<!-- Fin de ventana Modal insersion de responsables-->

<!-- Nueva Ventana Modal insertar proveedores-->
<?php 
	 	include 'insertar_prove.php';
?>
<!-- Fin de ventana Modal insersion de proveedores-->

<!-- Nueva Ventana Modal insertar Depto-->
<?php 
	 	include 'insertar_depto.php';
?>
<!-- Fin de ventana Modal insersion de Depto.-->

<!-- Nueva Ventana Modal insertar Detalles-->
<?php 
	 	include 'ventana_detalles.php';
?>
<!-- Fin de ventana Modal insersion de Detalles.-->


<div id="cabecera"><label id="lbl_c">Control de Equipo ESL-IT</label><img src="../IMAGENES/icon/user.png" /><label>[USER]</label></div>

<div id="sub_menu">
		<a href="sece_principal.php">
			<img src="../IMAGENES/icon/home.png" /> 
			<label>INICIO</label>
		</a>
		
		<a href="javascript:mostrarVentana();">
			<img src="../IMAGENES/icon/nuevo.png" />
			<label>EQUIPO</label>
			<div id="pie_link">Agregar Equipo<input type="image" src="../IMAGENES/icon/MAS.png" /></div>
		</a>
		
		<a href="#">
			<img src="../IMAGENES/icon/user 2.png"/>
			<label>USUARIOS</label>
			<div id="pie_link">Agregar Usuario<input type="image" src="../IMAGENES/icon/MAS.png" /></div>
		</a>
		
		<a href="javascript:mostrarVentana_res()">
			<img src="../IMAGENES/icon/RESPONSABLE.png" />
			<label>RESPONSABLES</label>
			<div id="pie_link">Agregar Responsable<input type="image" src="../IMAGENES/icon/MAS.png" /></div>
		</a>
		
		<a href="javascript:mostrarVentana_prov()">
			<img src="../IMAGENES/icon/ic_local_shipping_grey600_48dp.png" />
			<label>PROVEEDORES</label>
			<div id="pie_link">Agregar Proveedor<input type="image" src="../IMAGENES/icon/MAS.png" /></div>
		</a>
		
		<a href="javascript:mostrarVentana_depto()">
			<img src="../IMAGENES/icon/oficina.png"/>
			<label>DEPARTAMENTOS</label>
			<div id="pie_link">Agregar Departamento<input type="image" src="../IMAGENES/icon/MAS.png" /></div>
		</a>
		
		<a href="javascript:mostrarVentana_detalle()">
			<img src="../IMAGENES/icon/detalles.png"/>
			<label>DETALLES</label>
			<div id="pie_link">Otros Detalles<input type="image" src="../IMAGENES/icon/MAS.png" /></div>
		</a>
		
</div>


<!-- Consulta principal tabla-->
<div id="contenido">
	
	<?php
		include 'consulta_equipo.php';
	 ?>
	 
	
</div>
<!-- fin de table principal-->
</body>
</html>
