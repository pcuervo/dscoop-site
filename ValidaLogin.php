<?php
	// Conectar base de datos
	include("ConectaBD.php");

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
		
	$qUsuario=mysqli_query($con, "SELECT * FROM TB_Admin WHERE F_Usuario = '".$usuario."' AND F_Password = '".$password."'");

	if($rUsuario = mysqli_fetch_array($qUsuario)) {
		session_start();
		$_SESSION['usuario'] = $usuario;
		header('Location: consulta.php?id='. session_id()) ;	
	} else {
		header('Location: login.html');
		
	}

?>