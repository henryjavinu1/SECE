
<script type="text/javascript">
function mostrarVentana_ubicacion()
{
    var conten_ubicacion = document.getElementById('conten_ubicacion'); // Accedemos al contenedor
    conten_ubicacion.style.marginTop = "1%"; // Definimos su posición vertical. La ponemos fija para simplificar el código
    conten_ubicacion.style.display = 'block'; // Y lo hacemos visible
}

function ocultarVentana_ubicacion()
{
    var conten_ubicacion = document.getElementById('conten_ubicacion'); // Accedemos al contenedor
    conten_ubicacion.style.display = 'none'; // Y lo hacemos invisible
	//table_prov.style.display = 'none';
}
</script>

<div id="conten_ubicacion" style="display:none; position:absolute;">

<div style="font-weight: bold; text-align: left; color: #FFFFFF; padding: 5px; background-color:#00AB6F">AGREGAR ESTADO</div>
 
 <div id="contenido_modal">
 	<div>

	<form method="post" action="registrar_ubicacion.php" id="ins_equip">
		
			<label id="tit_div_mod">Ingresar Ubicacion</label><br />
			<label>Ubicacion</label>
			<input id= "cajas_equi" type="text" name="name_ubicacion" /><br />
			
			<input id="btnAceptar_add" type="submit" value="Registrar Ubicacion" />
	</form>
			
</div>		

 
 </div>
 
 
 
 <?php 
		error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM ubicacion");

	$table .= '<table id="table_ubicacion" style="display:none;">';
	$table .= '<tr>';
	$table .= '<th>Ubicacion</th>';		
	$table .= '<th>Borrar</th>';
	$table .= '<th>Actualizar</th>';
	$table .= '<th>Detalles</th>';
	$table .= '</tr>';
	
	while ($fila = mysqli_fetch_assoc($resultado))
	{		
		
		$table .= '<tr>';
		$table .= '<td>'. $fila['UBICACION'].'</td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/borrar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/actualizar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/detalles.png"/></td>';
		$table .= '</tr>';
		
	};
	$table .= '</table>';
	echo $table;
	mysqli_close($conexion_BD);
	
?>
 
 
<div style="float:left; width:100%; background-color: #F0F0F0; text-align: center; margin-top: 2%;"><input id="btnAceptar" onClick="ocultarVentana_ubicacion();" name="btnAceptar" type="button" value="CERRAR" /> </div>

</div>

