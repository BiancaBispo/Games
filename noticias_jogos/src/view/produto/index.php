<?php include_once("conexao.php");
    $result_produtos = sprintf("SELECT * FROM tbprod001 ORDER BY RAND()", time()%(24*60*60));
    $resultado_produto = mysqli_query($conn, $result_produtos);

    $result_class01 = sprintf("SELECT DISTINCT cNmNivel1 FROM tbprod001 WHERE cNmNivel1 <> ''");
    $resultado_class01 = mysqli_query($conn, $result_class01);


    $result_class02 = sprintf("SELECT DISTINCT cNmNivel2 FROM tbprod001 WHERE cNmNivel2 <> ''");
   // $result_class02 = "SELECT DISTINCT cNmNivel2 FROM TBPROD001 WHERE cNmNivel1 = '%$categoria01%'";
    $resultado_class02 = mysqli_query($conn, $result_class02);

    $result_class03 = sprintf("SELECT DISTINCT cNmNivel3 FROM tbprod001 WHERE cNmNivel3 <> ''");
    $resultado_class03 = mysqli_query($conn, $result_class03);

    $result_class04 = sprintf("SELECT DISTINCT cNmNivel4 FROM tbprod001 WHERE cNmNivel4 <> ''");
    $resultado_class04 = mysqli_query($conn, $result_class04);

?>

<!--Conexão com o banco-->
<?session_start();
    include_once "../login_novo/conexao.php";
    if(isset($_SESSION['email']) && isset ($_SESSION['id']) && isset ($_SESSION['role'])) { 
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Produtos</title>
	<!-- CSS-->
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>   -->
	<link href="/noticias_jogos/src/css/index.css" rel="stylesheet"/>
    <link href="/noticias_jogos/src/css/produto.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/noticias_jogos/src/css/container.css">


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

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--ja-->

    <script type="text/javascript" src="../produto/personalizado.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.0.js"></script>-->


    <!--Fonte-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    #header-site-vid{
        background-image: url('/noticias_jogos/src/media/fundo_admin/fundo_azul_Verde.png');
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        /*cor letra*/
        color: rgb(0, 0, 0);
        padding-top: 80px;
        padding-bottom: 80px;
    }
    </style>
</head>
<body >


<!--IMPORTAR através do php o menu pronto-->
<?php include_once ("../geral/header_produto.php");?>

<!--Seção para o admin-->
<? phpif ($row['role'] === 'user') {?>
<section id="header-site-vid">

 
<!--<div class="container"><div class="pacman-css"></div></div>-->

<div class="container">
    <?php include_once '../produto/filtro.php';?>

    <!--PRODUTOS-->
     <div class=" mx-auto col-md-10 col-lg-8 branco">
        <ul class="row portfolio lightbox list-unstyled mb-0 shuffle boxed-portfolio" id="grid" >
            <?php// while($rows_produto = sqlsrv_fetch_assoc($resultado_produto)){ ?>
            <?php while($rows_produto = mysqli_fetch_assoc($resultado_produto)){ ?>

            <li class="col-md-6 col-lg-4 project shuffle-item filtered" >
                <div class="card mb-0">
                    <div class="project m-0">
                        <figure class="portfolio-item">
                            <div class="hovereffect">
                            <?php echo '<img class="img-responsive mx-auto d-block" src="../edição_dados_admin/upload/'.$rows_produto['cImagem'].'" style="width: 210px; height: 210px;" alt="Imagem">';?>

                                <div class="overlay">
                                    <div class="hovereffect-title project-icons">
                                        <a href="../produto/vitrine.php?nCdProduto=<?php echo $rows_produto['nCdProduto'];?>" data-toggle="modal" data-target=".project-modal2"><i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>

                    <div class="card-body" style="height: 180px;" >
                        <a style="text-decoration: none;" class="card-title title-link fs-20 fw-bold text-uppercase"  href="../produto/vitrine.php?nCdProduto=<?php echo $rows_produto['nCdProduto'];?>"><?php echo $rows_produto['cNmproduto']; ?></a>
                        <p class="card-text text-dark mt-3 mb-0 fs-20" ><?php echo'R$' .number_format($rows_produto['nPreco'],2,',','.').  '<br/>';?></p>                         
                    </div>

                    <div class="card-footer text-center">
                        <p class="card-text mt-2 mb-0 "><a href="../produto/vitrine.php?nCdProduto=<?php echo $rows_produto['nCdProduto']; ?>" class="btn btn-outline-dark ">Acessar</a></p> 
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div> <br><br><br>
</div>
</div><br><br><br>

<!--<img src="/noticias_jogos/src/media/pacman.gif" alt="pacman imagem" style="width: 1210px; height: 210px;">-->

</section>

  <!--IMPORTAR através do php o footer = rodapé pronto-->
    <?php include_once "../geral/footer.php";?>
    <? } ?>

</body>
</html>
<?}else {
        header("Location: index.php");

}?> 