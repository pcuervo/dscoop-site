<?php
	// Conectar con bd
	// Conectar base de datos
	include("ConectaBD.php");

	//mysql_set_charset('utf8',$con); 

	$archivo = 'registrados_dscoop.csv';
	header("Content-Type: text/csv;charset=UTF-8" );
	
	$handle = fopen($archivo, 'w');
	$encabezado = array('Folio', 'Nombre', 'Apellido paterno', 'Apellido materno', 'Correo e.', utf8_decode('Teléfono'), 'Celular', 'Fecha de nacimiento', 'Calle', 'Num. Ext.', 'Num. Int.', 'Colonia', 'Ciudad', utf8_decode('Delegación/Municipio'), 'Estado', 'C.P.', 'Empresa', 'Giro', 'Cargo', utf8_decode('¿Cómo te enteraste?'), utf8_decode('Área interés'), utf8_decode("recibir información"));
	fputcsv($handle, $encabezado, ',', '"');
	 
	$sql = mysqli_query($con, 'SELECT * FROM TB_Usuario U INNER JOIN TB_Direccion D ON D.F_IdUsuario = U.F_IdUsuario INNER JOIN TB_Laboral L ON L.F_IdUsuario = U.F_IdUsuario INNER JOIN TB_Registro R ON R.F_IdUsuario = U.F_IdUsuario');
	 
	while($results = mysqli_fetch_array($sql)) {
		$results[24] == '1' ? $masInfo = 'si' : $masInfo = 'no';
		$folio = intval($results[0]);
		$row = array(	
			$folio,		
			utf8_decode($results[1]),
			utf8_decode($results[2]),
			utf8_decode($results[3]),
			utf8_decode($results[4]),
			utf8_decode($results[5]),
			utf8_decode($results[6]),
			utf8_decode($results[7]),
			utf8_decode($results[9]),
			utf8_decode($results[10]),
			utf8_decode($results[11]),
			utf8_decode($results[12]),
			utf8_decode($results[13]),
			utf8_decode($results[14]),
			utf8_decode($results[15]),
			utf8_decode($results[16]),
			utf8_decode($results[18]),
			utf8_decode($results[19]),
			utf8_decode($results[20]),
			utf8_decode($results[22]),
			utf8_decode($results[23]), 
			$masInfo
		);
		
		fputcsv($handle, $row, ',', '"');
	}
	 
	fclose($handle);
	
	header('Location: '.$archivo);

	// Desconectar bd
	mysqli_close($con);
?>