<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "noticias_produtos";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die ("<script> alert('Falha na conexão')</script>");

}
?>