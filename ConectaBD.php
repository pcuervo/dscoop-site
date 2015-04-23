<?php
	header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');
	// Conectar bd
	$host = "db570625729.db.1and1.com";
	$user = "dbo570625729";
	$password = "D5c00p!";
	$database = "db570625729";
	$con=mysqli_connect($host,$user,$password,$database);

    mysqli_query($con, "SET character_set_results=utf8");
    mb_internal_encoding('UTF-8');
    mysqli_query($con, "set names 'utf8'");

	// Check connection 
	if (mysqli_connect_errno()){
	  echo "Error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	} 
?>