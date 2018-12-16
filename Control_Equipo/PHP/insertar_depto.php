
<script type="text/javascript">
function mostrarVentana_depto()
{
    var conten_depto = document.getElementById('conten_depto'); // Accedemos al contenedor
	var table_depto = document.getElementById('table_depto');//cambiomos el display a la tabla
    conten_prov.style.marginTop = "1%"; // Definimos su posición vertical. La ponemos fija para simplificar el código
   // ventana.style.marginLeft = ((document.body.clientWidth-350) / 2) +  "px"; // Definimos su posición horizontal
    conten_depto.style.display = 'block'; // Y lo hacemos visible
	table_depto.style.display = 'block';
}

function ocultarVentana_depto()
{
    var conten_depto = document.getElementById('conten_depto'); // Accedemos al contenedor
    conten_depto.style.display = 'none'; // Y lo hacemos invisible
	//table_prov.style.display = 'none';
}
</script>

<div id="conten_depto" style="display:none; position:fixed">

<div style="font-weight: bold; text-align: left; color: #FFFFFF; padding: 5px; background-color:#006394">AGREGAR PROVEEDORES</div>
 
 <div id="contenido_modal">
 	<div>

	<form method="post" action="registrar_depto.php" id="ins_equip">
		
			<label id="tit_div_mod">Datos del Departamento</label><br />
			<label>Departamento</label>
			<input id= "cajas_equi" type="text" name="name_prov" /><br />
			
			<input id="btnAceptar_add" type="submit" value="Registrar Proveedor" />
	</form>
			
</div>		

 
 </div>
 
 
 
 <?php 
		error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM departamento");

	$table .= '<table id="table_depto" style="display:none;">';
	$table .= '<tr>';
	$table .= '<th>Departamento</th>';		
	$table .= '<th>Borrar</th>';
	$table .= '<th>Actualizar</th>';
	$table .= '<th>Detalles</th>';
	$table .= '</tr>';
	
	while ($fila = mysqli_fetch_assoc($resultado))
	{		
		
		$table .= '<tr>';
		$table .= '<td>'. $fila['DEPARTAMENTO'].'</td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/borrar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/actualizar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/detalles.png"/></td>';
		$table .= '</tr>';
		
	};
	$table .= '</table>';
	echo $table;
	mysqli_close($conexion_BD);
	
?>
 
 
<div style="float:left; width:100%; background-color: #F0F0F0; text-align: center; margin-top: 2%;"><input id="btnAceptar" onClick="ocultarVentana_depto();" name="btnAceptar" type="button" value="CERRAR" /> </div>

</div>

