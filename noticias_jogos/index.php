<!--Importantando as dependecias para ativar o banco de dados da section Produtos-->
<?php include_once("../noticias_jogos/src/view/edição_dados_admin/conexao_dbvendas.php");
//São selecionados 3 produtos da tabela em ordem aleatória atraves do tempo/hora
$result = sprintf("SELECT * FROM tbprod001 ORDER BY RAND(%d) LIMIT 3", time()%(24*60*60));
$resultado = mysqli_query($conn, $result);
?> 
<!--FIMM-->

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Game Notícias</title>
	<!-- CSS-->
	<link href="./src/css/index.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="./src/media/controle.ico" type="image/x-icon">

    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
     <!--JQuery, Pooper.js e Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="./src/Scripts/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
	<script src="./src/Scripts/index.js"></script>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script> 
</head>
<body>
    <!--IMPORTAR através do php o menu pronto-->
    <?php include_once "./src/view/geral/header.php";?>
    
    <!--Início Slider-->
    <section id="inicio" >
        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel" data-slide-to="1"></li>
                <li data-target="#Carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-3 active">
                    <div class="container">
                        <div class="carousel-caption d-sm-block text-right mb-4">
                            <h1 class="display-3 title-color "> Mundo Game</h1>
                            <p class="lead"> Navegue pelas fases desse mundo das notícias games!!</p>
                            <a href="#noticia" class="btn btn-color slide-btn btn-lg">Descubra</a>
                        </div>
                    </div>
                </div>
                <!--FIM imagem 1-->
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-sm-block mb-5">
                            <div class="row">
                                <div class="col-10 mx-auto col-sm-12">
                                    <h1 class="display-3 title-color text-capitalize product-title text-center"> Notícias</h1>
                                    <p class="lead">Encontre as notícias do momento</p>
                                    <a href="noticias.php" class="btn btn-color slide-btn btn-lg" style="color: rgb(145, 145, 145);">Ler mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIM imagem 2-->
                <div class="carousel-item carousel-image-1">
                    <div class="container">
                        <div class="carousel-caption d-sm-block mb-5">
                            <h1 class="display-3 title-color"> Sobre nós</h1>
                            <p class="lead">Conheça nossa equipe!</p>
                            <a href="#contato" class="btn btn-color slide-btn btn-lg" style="color: rgb(145, 145, 145);">Ler mais</a>
                        </div>
                    </div>
                </div>
                <!--FIM imagem 3-->
                <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#Carousel" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span>
                </a>
                <!--Controles-->
            </div>
        </div>
    </section>
    <!--FIM SLIDER-->

    <!--IMPORTAR através do php o carroseul icons-->
    <?php include_once './src/view/geral/carousel.php';?>

    <!--INÍCIO notícias-->
    <section id="noticia" class="service py-5 header-site-news">
        <div class="container">
            <div class="row">
               <!-- <div class="col-10 mx-auto col-sm-12">-->
                <div class="col-10 mx-auto col-md-12 col-lg-12 col-sm-12">
                    <h1 class="text-capitalize product-title text-center">Notícias</h1>
                    <p class="lead text-center"> Encontre aqui notícias sobre o mundo dos Games!</p> 

                    <div id="noticias" class="noticias"><body onload="getNewsById('3288206084');getNewsById('3276690220');getNewsById('3313422751');getNewsById('3313420952'); getNewsById('3313407444');getNewsById('3291872671');getNewsById('3291769022');" ></body></div>
                    <!-- <div id="noticias" class="noticias"><body onload="getNews()" limit = "3"></body></div>-->
                    <br><div class="text-center"><a href="noticias.php" class="btn btn-color slide-btn btn-lg" style="color: rgb(145, 145, 145);">MAIS NOTÍCIAS</a> </div> 
                </div>
            </div>
        </div>
    </section>
    <!--FIM notícias-->

    <!--IMPORTAR através do php os VIDEOS-->
    <section id="videos">
    <?php include_once './src/view/geral/video.php';?>
 </section>
    <!--INICIO Produtos -->
    <section id="produtos" class="products py-5 text-center ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize product-title">Produtos</h1><hr> <br>
                </div>
                <div class="container theme-showcase" role="main">
                    <div class="row">

                        <?php while($rows = mysqli_fetch_assoc($resultado)){ ?>
                            <div class="col-sm-6 col-md-4 video-anima">
                                <div class="thumbnail" ><br>    
                                <a href="../noticias_jogos/src/view/login_novo/index.php?nCdProduto=<?php echo $rows['nCdProduto']; ?>">
                                    <?php echo '<img src="/noticias_jogos/src/view/edição_dados_admin/upload/'.$rows['cImagem'].'"style="width: 220px; height: 220px;" alt="Imagem">';?>
                                </a>
                                    <div class="caption text-center"><br>
                                        <a style="text-decoration: none;" href="../noticias_jogos/src/view/login_novo/index.php?nCdProduto=<?php echo $rows['nCdProduto']; ?>"><h3 class="text-dark"style="font-size: 20px;"><?php echo $rows['cNmproduto']; ?></h3></a>
                                        <h3 style="font-size: 20px;"><?php echo'R$' .number_format($rows['nPreco'],2,',','.').  '<br/>';?></h3> <br>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <br><a href="/noticias_jogos/src/view/login_novo/index.php" class="btn btn-color slide-btn btn-lg" style="color: rgb(145, 145, 145);">PRODUTOS</a>  
                </div>
            </div>
        </div>
    </section>
     <!-- FIM Produtos -->

    <!--IMPORTAR através do php as informações com incones no final da página-->
    <?php include_once "./src/view/geral/iconInfo.php";?>

    <!--IMPORTAR através do php o footer = rodapé pronto-->
    <?php include_once "./src/view/geral/footer.php";?>
</body>
</html>