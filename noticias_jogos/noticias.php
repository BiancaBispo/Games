<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Game Notícias</title>
	<!-- CSS-->
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>   -->
	<link href="./src/css/index.css" rel="stylesheet"/>
	
    <!--back_and script -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!--JQuery, Pooper.js e Bootstrap -->
    <script src="./src/Scripts/jquery-3.6.0.js"></script>
    <script src="./src/Scripts/popper.min.js"></script>
	<script src="./src/Scripts/bootstrap.min.js"></script>    
	<script src="./src/Scripts/index.js"></script>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
</head>
<body>
    <!--IMPORTAR através do php o menu pronto-->
    <?php include_once "./src/view/geral/header.php";?>

    <section>
        <div id="noticias" class="noticias"></div>
        <!--mostra cards ao carregar a página-->
        <body onload="getNews()">
        <!--mostra cards ao descer a página
        <body onscroll="getNews()">-->
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center"> 
                    <!--Carrega mais cards ao apertar o botão-->
                    <br>
                    <!-- <a href="#" class="btn btn-color slide-btn btn-lg " onclick="return getNews()"> Carregar Notícias</a> -->
                    <input type="button" class="btn btn-color slide-btn btn-lg "value="Carregar Notícias" onclick="getNews()"/>   
                </div>
            </div>
        </div>
        <br><br>
    </section>

    <!--IMPORTAR através do php o footer = rodapé pronto-->
    <?php include_once "./src/view/geral/footer.php";?>
</body>
</html>