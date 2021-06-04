<?php 

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "db_usuario";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Conexão invalida!!";
    exit();
}
?>