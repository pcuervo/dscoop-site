<?php
	// Conectar con bd
	// Conectar base de datos
	include("ConectaBD.php");

	$query="SELECT F_Nombre, F_ApePat, F_ApeMat, F_Empresa, F_Telefono, F_Celular, F_Correo FROM TB_Usuario U INNER JOIN TB_Laboral L ON U.F_IdUsuario = L.F_IdUsuario";
	$registros=mysqli_query($con, $query );

	echo "<div class='width clearfix table columna c-12'><div class='renglon clearfix'>
	<div class='span c-2 small-4 text-center'>Nombre</div>
	<div class='span c-2 small-4 text-center'>Apellido Paterno</div>
	<div class='span c-2 small-4 text-center'>Empresa</div>
	<div class='span c-2 small-4 text-center'>Tel.</div>
	<div class='span c-2 small-4 text-center'>Cel.</div>
	<div class='span c-2 small-4 text-center'>Correo</div></div>";

	while($data = mysqli_fetch_array($registros))
	{
		echo "<div class='renglon clearfix'>";
		echo "<div class='span c-2 small-4'>&nbsp$data[0]</div>";
		echo "<div class='span c-2 small-4'>&nbsp$data[1]</div>";
		echo "<div class='span c-2 small-4'>&nbsp$data[3]</div>";
		echo "<div class='span c-2 small-4'>&nbsp$data[4]</div>";
		echo "<div class='span c-2 small-4'>&nbsp$data[5]</div>";
		echo "<div class='span c-2 small-4'>&nbsp$data[6]</div>";
		echo "</div>";
	}
	echo "</div>";

	// Desconectar bd
	mysqli_close($con);
?>