
<script type="text/javascript">
function mostrarVentana_estado()
{
    var conten_estado = document.getElementById('conten_estado'); // Accedemos al contenedor
    conten_estado.style.marginTop = "1%"; // Definimos su posición vertical. La ponemos fija para simplificar el código
    conten_estado.style.display = 'block'; // Y lo hacemos visible
}

function ocultarVentana_estado()
{
    var conten_estado = document.getElementById('conten_estado'); // Accedemos al contenedor
    conten_estado.style.display = 'none'; // Y lo hacemos invisible
	//table_prov.style.display = 'none';
}
</script>

<div id="conten_estado" style="display:none; position:absolute;">

<div style="font-weight: bold; text-align: left; color: #FFFFFF; padding: 5px; background-color:#00AB6F">AGREGAR ESTADO</div>
 
 <div id="contenido_modal">
 	<div>

	<form method="post" action="registrar_comp.php" id="ins_equip">
		
			<label id="tit_div_mod">Estados</label><br />
			<label>Estados</label>
			<input id= "cajas_equi" type="text" name="name_estado" /><br />
			
			<input id="btnAceptar_add" type="submit" value="Registrar Estado" />
	</form>
			
</div>		

 
 </div>
 
 
 
 <?php 
		error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM estado");

	$table .= '<table id="table_estado" style="display:none;">';
	$table .= '<tr>';
	$table .= '<th>Estado</th>';		
	$table .= '<th>Borrar</th>';
	$table .= '<th>Actualizar</th>';
	$table .= '<th>Detalles</th>';
	$table .= '</tr>';
	
	while ($fila = mysqli_fetch_assoc($resultado))
	{		
		
		$table .= '<tr>';
		$table .= '<td>'. $fila['estado'].'</td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/borrar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/actualizar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/detalles.png"/></td>';
		$table .= '</tr>';
		
	};
	$table .= '</table>';
	echo $table;
	mysqli_close($conexion_BD);
	
?>
 
 
<div style="float:left; width:100%; background-color: #F0F0F0; text-align: center; margin-top: 2%;"><input id="btnAceptar" onClick="ocultarVentana_estado();" name="btnAceptar" type="button" value="CERRAR" /> </div>

</div>

