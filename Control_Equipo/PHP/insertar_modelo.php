
<script type="text/javascript">
function mostrarVentana_modelo()
{
    var conten_modelo = document.getElementById('conten_modelo'); // Accedemos al contenedor
    conten_modelo.style.marginTop = "1%"; // Definimos su posición vertical. La ponemos fija para simplificar el código
    conten_modelo.style.display = 'block'; // Y lo hacemos visible
}

function ocultarVentana_modelo()
{
    var conten_modelo = document.getElementById('conten_modelo'); // Accedemos al contenedor
    conten_modelo.style.display = 'none'; // Y lo hacemos invisible
	//table_prov.style.display = 'none';
}
</script>

<div id="conten_modelo" style="display:none; position:absolute;">

<div style="font-weight: bold; text-align: left; color: #FFFFFF; padding: 5px; background-color:#00AB6F">AGREGAR ESTADO</div>
 
 <div id="contenido_modal">
 	<div>

	<form method="post" action="registrar_modelo.php" id="ins_equip">
		
			<label id="tit_div_mod">Ingresar Modelo</label><br />
			<label>Modelo</label>
			<input id= "cajas_equi" type="text" name="name_modelo" /><br />
			
			<input id="btnAceptar_add" type="submit" value="Registrar Modelo" />
	</form>
			
</div>		

 
 </div>
 
 
 
 <?php 
		error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM modelo");

	$table .= '<table id="table_modelo" style="display:none;">';
	$table .= '<tr>';
	$table .= '<th>Modelo</th>';		
	$table .= '<th>Borrar</th>';
	$table .= '<th>Actualizar</th>';
	$table .= '<th>Detalles</th>';
	$table .= '</tr>';
	
	while ($fila = mysqli_fetch_assoc($resultado))
	{		
		
		$table .= '<tr>';
		$table .= '<td>'. $fila['modelo'].'</td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/borrar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/actualizar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/detalles.png"/></td>';
		$table .= '</tr>';
		
	};
	$table .= '</table>';
	echo $table;
	mysqli_close($conexion_BD);
	
?>
 
 
<div style="float:left; width:100%; background-color: #F0F0F0; text-align: center; margin-top: 2%;"><input id="btnAceptar" onClick="ocultarVentana_modelo();" name="btnAceptar" type="button" value="CERRAR" /> </div>

</div>

