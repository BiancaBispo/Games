<? session_start();
    include ' ../login_admin/conexao.php';
    //if(isset($_SESSION['email']) && isset ($_SESSION['id']) && isset ($_SESSION['role'])) { 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <script src="./Scripts/jquery-3.6.0.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/noticias_jogos/src/css/admin_tela.css"> 
    <link rel="stylesheet" href="/noticias_jogos/src/css/animacao.css">

    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
    <!--Link icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Edição dados banco</title>
    
    <style>
    #header-site-vid{
       /* background-image: url('/noticias_jogos/src/media/fundo\ 9.jpg');*/
       /* background-image: url('/noticias_jogos/src/media/fundo20.jpg');*
        background-image: url('/noticias_jogos/src/media/fundo21.jpg');*/
         background-image: url('/noticias_jogos/src/media/fundo_admin/fundo_simples_azul.png');

       /* background-image: url('/noticias_jogos/src/media/fundo\ 9.jpg');*/


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
<body>

<?php include_once '../geral/menu_admin.php';?>
<? phpif ($row['role'] === 'admin') {?> <!--Seção para o admin-->

    <section id="header-site-vid">
    <div class="container">
        <div class="row right-content-center"  >
            <div class="col animacao">
                <h1 style="font-size: 23px;  text-align: center;">Bem vindo(a) a área de configuração. Aqui é possível editar, deletar e adicionar novos vídeos e produtos ao site Game Notícias.</h1><br>
            </div>
        </div>  
    
        <br>
        <div class="col animacao">
            <br><br>
        <div class="row right-content-center ">
            <br>
            <div class="col-sm-4">
                <br>
                <div class="card">
                    <div class="card-body text-center"><p class="text-white">Para adicionar um vídeo a lista, basta ir a página do YouTube desejada. Em seguida, clique em “COMPARTILHAR”</p></div>
                </div>
            </div>
            <br>
            <div class="col-sm-8">
                <img src="/noticias_jogos/src/media/geral 1.PNG" class=" mx-auto d-block img-fluid "   style="border: 2px solid rgba(68, 68, 68, 0.712);" alt="">
            </div>    
        </div>
            
        <br><br><br><br><br>
        <div class="row right-content-center">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center"><p class="text-white">Ao clicar, abrirá uma tela, nela terá a opção de “INCORPORAR”.</p></div>
                    </div>
                </div>    
            
            <div class="col-sm-6">
                <img src="/noticias_jogos/src/media/incorporar 2.PNG" class=" mx-auto d-block img-fluid "style="border: 2px solid rgba(68, 68, 68, 0.712);" alt="">
            </div>    
        </div>

        <br><br><br><br><br>
        <div class="row right-content-center"> 
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center"><p class="text-white">Logo mais, haverá um texto com um vídeo ao lado. </p></div>
                </div>
            </div>
            <div class="col-sm-8"> 
                <img src="/noticias_jogos/src/media/incorporar_2.PNG" class=" mx-auto d-block img-fluid " style="border: 2px solid rgba(68, 68, 68, 0.712);" alt="">
            </div>
        </div>
                    
        <br><br><br><br><br>
        <div class="row right-content-center">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body"><p class="text-white">Dentro do texto aparecerá o link para colocar no site. O link para selecionar é depois da palavra “SRC”, como ilustrado na imagem ao lado.</p></div>
                </div>
            </div>

            <div class="col-sm-6">
                <img src="/noticias_jogos/src/media/incorporar_2_2.PNG" class=" mx-auto d-block img-fluid "  style="border: 2px solid rgba(68, 68, 68, 0.712); width: 700; height:300px;" alt="">
            </div>              
        </div>
        
        <br><br><br><br><br>
        <div class="row right-content-center">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body"><p class="text-white">Para a imagem do vídeo ficar visível, é necessário o código do vídeo. Que estará junto do link, logo após o “EMBED”.</p></div>
                </div>
            </div>

            <div class="col-sm-6">
                <img src="/noticias_jogos/src/media/link.PNG" class=" mx-auto d-block img-fluid " style="border: 2px solid rgba(68, 68, 68, 0.712); width: 500px; height:33px;" alt="">
            </div>
        </div>  

    </div>
</section>
        
<? } ?>
</body>
</html>
<?}else {
     header("Location: ../login_admin/index.php");
}?> 

