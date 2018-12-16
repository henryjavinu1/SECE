
<?php 
error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'html_errors', false );


require "conexion_BD.php";

$resultado = mysqli_query($conexion_BD, "SELECT *FROM equipo 
	INNER JOIN estado 
	INNER JOIN tipo
	INNER JOIN responsable
	INNER JOIN compania
	INNER JOIN departamento
	INNER JOIN ubicacion
	INNER JOIN centro 
	INNER JOIN marca 
	INNER JOIN modelo  
	ON equipo.id_estado=estado.id_estado 
	AND equipo.id_tipo=tipo.id_tipo
	AND equipo.id_resp=responsable.id_resp
	AND equipo.id_comp=compania.id_comp
	AND equipo.id_depto=departamento.id_depto
	AND equipo.id_ubicacion=ubicacion.id_ubicacion
	AND equipo.id_centro=centro.id_centro
	AND equipo.id_marca=marca.id_marca
	AND equipo.id_mod=modelo.id_mod

");

	$table .= '<div id="contenedor_tab" >';
	$table .= '<table id="table_equipo">';
	$table .= '<tr>';
	$table .= '<th>Serie</th>';
	$table .= '<th>Nombre_Equipo</th>';
	$table .= '<th>Estado</th>';
	$table .= '<th>Nombres</th>';
	$table .= '<th>Apellidos</th>';
	/*$table .= '<th>Fecha Ingreso</th>';*/
	$table .= '<th>Compania</th>';
	$table .= '<th>Departamento</th>';
	$table .= '<th>Tipo Equipo</th>';
	$table .= '<th>Ubicacion</th>';
	$table .= '<th>Centro</th>';
	$table .= '<th>Marca</th>';
	$table .= '<th>Modelo</th>';
	$table .= '<th>Borrar</th>';
	$table .= '<th>Actualizar</th>';
	$table .= '<th>Detalles</th>';
	/*$table .= '<th>Direccion IP</th>';*/
/*	$table .= '<th>MAC WIFI</th>';
*//*	$table .= '<th>MAC ETHERNET</th>'*/;
	
	$table .= '</tr>';
	
	while ($fila = mysqli_fetch_assoc($resultado))
	{
		/*$serie = $fila ['SERIE'];*/
		$table .= '<tr>';
		$table .= '<td>'. $fila ['SERIE'].'</td>';
		$table .= '<td id ="">'. $fila['NOMBRE_EQUIPO'] .'</td>';
		$table .= '<td id ="">'. $fila['ESTADO'] .'</td>';
		$table .= '<td id ="">'. $fila['NOMBRES'] .'</td>';
		$table .= '<td id ="">'. $fila['APELLIDOS'] .'</td>';
		$table .= '<td id ="">'. $fila['COMPANIA'] .'</td>';
		$table .= '<td id ="">'. $fila['DEPARTAMENTO'] .'</td>';
		$table .= '<td id ="">'. $fila['TIPO'] .'</td>';
		$table .= '<td id ="">'. $fila['UBICACION'] .'</td>';
		$table .= '<td id ="">'. $fila['CENTRO'] .'</td>';
		$table .= '<td id ="">'. $fila['MARCA'] .'</td>';
		$table .= '<td id ="">'. $fila['MODELO'] .'</td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/borrar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/actualizar.png" /></td>';
		$table .= '<td id =""><input type="image" id="borrar" src="../IMAGENES/icon/detalles.png"/></td>';
		$table .= '</tr>';
		
		
	};
	$table .= '</table>';
	$table .= '</div>';	
	echo $table;
	mysqli_close($conexion_BD);
	

?>