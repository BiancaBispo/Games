<?php 
if(isset($_POST['categoria4'])){
      $id = $_POST['nCdProduto'];
      $cNmproduto = $_POST['cNmproduto'];
      $nPreco = $_POST['nPreco'];
      $nEstoque = $_POST['nEstoque'];
      $cNmNivel1= $_POST['cNmNivel1'];
      $cNmNivel2= $_POST['cNmNivel2'];
      $cNmNivel3= $_POST['cNmNivel3'];
      $cNmNivel4= $_POST['cNmNivel4'];
      $cImagem = $_POST['cImagem'];

    //$categoria01 = $_GET['categoria4'];
     $id = validate($_GET['categoria4']);
      $id = $_GET['categoria4'];


    $result_categoria01 = "SELECT cNmNivel4 FROM tbprod001 WHERE  nCdProduto=$id ";
    $resultado_categoria01 = mysqli_query($conn, $result_categoria01);  }

?>