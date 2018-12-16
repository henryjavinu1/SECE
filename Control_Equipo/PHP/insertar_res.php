
<script type="text/javascript">
function mostrarVentana_res()
{
    var conten_res = document.getElementById('conten_res'); // Accedemos al contenedor
	var table_res = document.getElementById('table_res');//cambiomos el display a la tabla
    conten_res.style.marginTop = "1%"; // Definimos su posición vertical. La ponemos fija para simplificar el código
   // ventana.style.marginLeft = ((document.body.clientWidth-350) / 2) +  "px"; // Definimos su posición horizontal
    conten_res.style.display = 'block'; // Y lo hacemos visible
	table_res.style.display = 'block';
}

function ocultarVentana_res()
{
    var conten_res = document.getElementById('conten_res'); // Accedemos al contenedor
    conten_res.style.display = 'none'; // Y lo hacemos invisible
	//table_res.style.display = 'none';
}
</script>

<div id="conten_res" style="display:none; position:fixed">

<div style="font-weight: bold; text-align: left; color: #FFFFFF; padding: 5px; background-color:#006394">AGREGAR SISTEMAS OPERATIVOS</div>
 
 <div id="contenido_modal">
 	
<div>
	<form method="post" action="registrar_responsable.php" id="ins_equip">
		
			<label id="tit_div_mod">Datos del Responsable</label><br />
			<label>Num. Identidad</label>
			<input id= "cajas_equi" value="--" type="text" name="ID" /><br />
			
			<label>Nombres</label>
			<input id= "cajas_equi" type="text" name="name" /><br />
			
			<label>Apellidos</label>
			<input id= "cajas_equi" type="text" name="last_name" /><br />
			
			<input id="btnAceptar_add" type="submit" value="Agregar Equipo" />
	</form>
			
</div>		

 
 </div>
 
 
 
 <?php 
		error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM responsable");

	$table .= '<table id="table_res" style="display:none;">';
	$table .= '<tr>';
	$table .= '<th>Num. e ID</th>';
	$table .= '<th>Nombres</th>';
	$table .= '<th>Apellidos</th>';	
	$table .= '<th>Borrar</th>';
	$table .= '<th>Actualizar</th>';
	$table .= '<th>Detalles</th>';
	$table .= '</tr>';
	
	while ($fila = mysqli_fetch_assoc($resultado))
	{		
		
		$table .= '<tr>';
		$table .= '<td>'. $fila['NUM_ID'].'</td>';
		$table .= '<td id ="">'. $fila['NOMBRES'] .'</td>';
		$table .= '<td id ="">'. $fila['APELLIDOS'] .'</td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/borrar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/actualizar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/detalles.png"/></td>';
		$table .= '</tr>';
		
	};
	$table .= '</table>';
	echo $table;
	mysqli_close($conexion_BD);
	
?>
 
 
<div style="float:left; width:100%; background-color: #F0F0F0; text-align: center; margin-top: 2%;"><input id="btnAceptar" onClick="ocultarVentana_res();" name="btnAceptar" type="button" value="CERRAR" /> </div>

</div>

