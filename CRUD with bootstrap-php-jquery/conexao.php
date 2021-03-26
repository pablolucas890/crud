<?php
	$servername = "localhost";
	$username = "novousuario";
	$password = "password";
	$dbname = "backend";

	// Cria a conexao
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Checa a conexao
	if (!$conn) {
	    die("A conexão falhou: " . mysqli_connect_error());
	}
?>