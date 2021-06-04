<?php
    include_once("conexao.php");
    $id_produto = $_GET['nCdProduto'];
    $result = "SELECT * FROM tbprod001 WHERE nCdProduto='$id_produto'";
    $resultado = mysqli_query($conn, $result);
    $rows_id = mysqli_fetch_assoc($resultado);
?>

<!--Conexão com o banco-->
<?session_start();
    include_once "../login_admin/conexao.php";
    if(isset($_SESSION['email']) && isset ($_SESSION['id']) && isset ($_SESSION['role'])) { 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informaçõs do Produto</title>
    <!-- CSS-->
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>   -->
	<link href="/noticias_jogos/src/css/index.css" rel="stylesheet"/>
	<link href="/noticias_jogos/src/css/carrinho.css" rel="stylesheet"/>

    
    <!--back_and script -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!--JQuery, Pooper.js e Bootstrap -->
    <script src="./src/Scripts/jquery-3.6.0.js"></script>
    <script src="./src/Scripts/popper.min.js"></script>
	<script src="./src/Scripts/bootstrap.min.js"></script>    
	<script src="./src/Scripts/index.js"></script>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>

    <!--API GOOGLE-->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
</head>
<body style="background: linear-gradient(to right, #273db9, #00d4ff);">
   <!--IMPORTAR através do php o menu pronto-->
   <?php include_once "../geral/header_produto.php";?>

   <br>
<div class="container mt-5 p-3 rounded cart animacao">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="product-details mr-3">
                <div class="d-flex flex-row align-items-center" ><a href="../produto/index.php">
                    <i style=" font-size: 26px;" class="fa fa-long-arrow-left"></i><span class="ml-2" style=" font-size: 26px;">Continue a Comprar</span></a>
                </div>
                <hr>
                
                <h6 class="mb-2">Carrinho</h6>
                    <div class="d-flex justify-content-between">
                        <span>Você tem: 1 produtos no seu carrinho</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-2 mt-3 p-2 items rounded">
                        <div class="d-flex flex-row align-items-center">
                            <?php echo '<img src="/noticias_jogos/src/view/edição_dados_admin/upload/'.$rows_id['cImagem'].'" width ="100px;" alt="Imagem">';?>                         
                            <div class="ml-2"><span class="font-weight-bold d-block"><?php echo $rows_id['cNmproduto']; ?></span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">1</span><span class="d-block ml-5 font-weight-bold">
                            <?php echo'R$' .number_format($rows_id['nPreco'],2,',','.').  '<br/>';?></span><i class="fa fa-trash-o ml-3 text-black-50"></i>
                        </div>
                    </div>
                </div>
            </div>
        
            
        <div class="col-md-4" style="background: rgb(0, 0, 0);">
            <div class="payment-info">
                <div class="d-flex justify-content-between align-items-center"><span>COMPRAR</span></div>
                <span class="type d-block mt-3 mb-1">Tipo de cartão</span>
                <label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" /></span> </label>
                <div><label class="credit-card-label d-block">Nome completo da pessoa do cartão</label><input type="text" class="form-control credit-inputs" placeholder="Name"></div>
                <div><label class="credit-card-label">Número do cartão</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                
                <div class="row">
                    <div class="col-md-6"><label class="credit-card-label ">Data</label><input type="text" class="form-control credit-inputs" placeholder="05/00"></div>
                    <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="000"></div>
                </div>

                <hr class="line">
                <div class="d-flex justify-content-between information"><span>Total</span><span><?php echo'R$' .number_format($rows_id['nPreco'],2,',','.').  '<br/>';?></div>
                
                <button class="btn btn-secondary btn-block d-flex justify-content-between mt-3" type="button">
                   <span>Finalizar a Compra<i class="fa fa-long-arrow-right ml-1"></i></span>
                </button>
            </div>
        </div>
    </div>
<br>
</div>
<br><br><br>
    <!--IMPORTAR através do php o footer = rodapé pronto-->
    <?php include_once "../geral/footer.php";?>

</body>
</html>