
<script type="text/javascript">
function mostrarVentana_detalle()
{
    var conten_detalle = document.getElementById('conten_detalle'); // Accedemos al contenedor
    conten_detalle.style.marginTop = "1%"; // Definimos su posición vertical. La ponemos fija para simplificar el código
   // ventana.style.marginLeft = ((document.body.clientWidth-350) / 2) +  "px"; // Definimos su posición horizontal
    conten_detalle.style.display = 'block'; // Y lo hacemos visible
	table_detalle.style.display = 'block';
}

function ocultarVentana_detalle()
{
    var conten_detalle = document.getElementById('conten_detalle'); // Accedemos al contenedor
    conten_detalle.style.display = 'none'; // Y lo hacemos invisible
	//table_prov.style.display = 'none';
}
</script>



	<!-- Nueva Ventana Modal insertar centros-->
<?php 
	 	include 'insertar_centro.php';
?>

<!-- Nueva Ventana Modal insertar centros-->
<?php 
	 	include 'insertar_comp.php';
?>

<!-- Nueva Ventana Modal insertar estados-->
<?php 
	 	include 'insertar_estado.php';
?>


<!-- Nueva Ventana Modal insertar Marca-->
<?php 
	 	include 'insertar_marca.php';
?>


<!-- Nueva Ventana Modal insertar modelo-->
<?php 
	 	include 'insertar_modelo.php';
?>

<!-- Nueva Ventana Modal insertar Tipo-->
<?php 
	 	include 'insertar_tipo.php';
?>



<!-- Nueva Ventana Modal insertar ubicacion-->
<?php 
	 	include 'insertar_ubicacion.php';
?>
<link rel="stylesheet" href="../CSS/Principal.css" />



<div id="conten_detalle" style="display:none; position:fixed">

 <div id="ventana_detalle">
 	<div id="cabecera_detalle">
		<label id="lbl_c">Ingreso de Detalles de Equipo</label>		
	</div>
 	
	<div id="cuerpo_detalle">
		<label id="lbl_sub">Modulo De Insercion Detalles Equipo</label>
		
		<a id="cajas_detalles" href="javascript:mostrarVentana_centro()">
			<label id="lbl_det">Registrar nuevo centro</label>
			<img id="img_detalles_g" src="../IMAGENES/icon/MAS.png" />
			<label id="lbl_det_p">Registrar</label>	
		</a>
		
		<a id="cajas_detalles" href="javascript:mostrarVentana_comp()">
			<label id="lbl_det">REGISTRAR NUEVO COMPANIA</label>
			<img id="img_detalles_g" src="../IMAGENES/icon/MAS.png" />
			<label id="lbl_det_p">Registrar</label>	
		</a>
		
		<a id="cajas_detalles" href="javascript:mostrarVentana_estado()">
			<label id="lbl_det">REGISTRAR NUEVO ESTADO</label>
			<img id="img_detalles_g" src="../IMAGENES/icon/MAS.png" />
			<label id="lbl_det_p">Registrar</label>		
		</a>
		
		<a id="cajas_detalles" href="javascript:mostrarVentana_marca()">
			<label id="lbl_det">REGISTRAR NUEVO MARCA</label>
			<img id="img_detalles_g" src="../IMAGENES/icon/MAS.png" />
			<label id="lbl_det_p">Registrar</label>		
		</a>
		
		<a id="cajas_detalles" href="javascript:mostrarVentana_modelo()">
			<label id="lbl_det">REGISTRAR NUEVO MODELO</label>
			<img id="img_detalles_g" src="../IMAGENES/icon/MAS.png" />
			<label id="lbl_det_p">Registrar</label>	
		</a>
		
		<a id="cajas_detalles" href="javascript:mostrarVentana_tipo()">
			<label id="lbl_det">REGISTRAR NUEVO TIPO</label>
			<img id="img_detalles_g" src="../IMAGENES/icon/MAS.png" />
			<label id="lbl_det_p">Registrar</label>	
		</a>
		
		<a id="cajas_detalles" href="javascript:mostrarVentana_ubicacion()">
			<label id="lbl_det">REGISTRAR NUEVO UBICACION</label>
			<img id="img_detalles_g" src="../IMAGENES/icon/MAS.png" />
			<label id="lbl_det_p">Registrar</label>	
		</a>
	
	</div>
 
 
 
 
 </div>
 
 
<div style="float:left; width:100%; background-color: #F0F0F0; text-align: center; margin-top: 2%;"><input id="btnAceptar" onClick="ocultarVentana_detalle();" name="btnAceptar" type="button" value="CERRAR" /> </div>

</div>

