<?php
	
	$mysqli = new mysqli('localhost', 'root', 'Admin09', 'utileria');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>