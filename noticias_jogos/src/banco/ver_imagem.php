<?php
require("conexao.php");

$id_imagem = $_GET['id'];
$querySelecionaPorCodigo = "SELECT id,
imagem_produto FROM tabela_produto WHERE id = $id";
$resultado = mysql_query($querySelecionaPorCodigo);
$imagem = mysql_fetch_object($resultado);
Header( "Content-type: image/gif");
echo $imagem->imagem;
?>