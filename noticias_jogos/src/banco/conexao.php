<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "vendas";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die ('Não foi possível conectar');
?>