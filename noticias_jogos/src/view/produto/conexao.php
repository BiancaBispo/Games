<?php
	//$serverName = "LAPTOP-V3SF0COF\Bislu";
//	$connectionInfo = array("Database"=>"company");

	//$conn = sqlsrv_connect($serverName, $connectionInfo);
	//if($conn === false)
//	{
		//echo "CONEXÃO INVALIDA.</br>";
	//	die(print_r(sqlsrv_errors(), true));
//	}


	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "noticias_produtos";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die ('Não foi possível conectar');
?>