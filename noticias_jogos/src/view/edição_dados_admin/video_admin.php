<?session_start();
    include " ./src/view/login_admin/conexao.php";
    if(isset($_SESSION['email']) && isset ($_SESSION['id']) && isset ($_SESSION['role'])) { 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <!-- <link rel="stylesheet" href="/noticias_jogos/src/css/index.css">
    Fonte--> 
    <link rel="stylesheet" href="/noticias_jogos/src/css/tabela.css">

    <link rel="stylesheet" href="/noticias_jogos/src/css/animacao.css">
    <!--Link icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>

    <title>Edição dados banco</title>
     <style>
#header-site-vid{
   
        background-image: url('/noticias_jogos/src/media/fundo_admin/fundo_simples_azul.png');
    /*background-image: url('/noticias_jogos/src/media/fundo_admin/fundo_vermelho_azul.png');*/

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

    <!--Seção para o admin-->
    <? phpif ($row['role'] == 'admin') {?>



    <!--incluindo o php que possibilita a criação, update e delete dos dados-->
    <?php include_once 'configuracao_video.php';?>


    <!--codigo em php com mensagem de alerta feitas quando o upadete, por exemplo, for concluido-->
    <?php if(isset($_SESSION['message'])):?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php echo $_SESSION['message'];
                unset ($_SESSION['message']); ?>
        </div>
    <?php endif ?> 

<section id="header-site-vid">

<!--Parte dos inputs para criar ou atualizar os dados-->
    <div class="container">
        <div class="row right-content-center"> 
            <div class="card " style="width: 500px; height:690px;">
            <!--<span class="service-icon"><i class="fas fa-file-video fa-4x"></i></span>
        
            class="form-inline" deixar o texto em uma linha só
        -->
            <h1 class="anima">Video</h1> <br> <br>

            <form action="configuracao_video.php" method="POST" class="needs-validation" novalidate >
                <!--Formatação para adicionar as caixas para adicionar, editar e exluir-->
                <input type="hidden" name="id" value="<?php echo $id;?>">
                
                <div class="form-group"> <!--o input puxará o dado do banco que esta direcionado ao mesmo, neste cado é o nome, através do php-->
                    <p>Nome:</p>
                    <input type="text" name="nome_video" class="form-control" value="<?php echo $nome_video;?>" placeholder="Nome" required>   
                    <div class="valid-feedback">Correto.</div>
                    <div class="invalid-feedback">Preencha esse campo.</div>
                </div>
                
                <div class="form-group">
                    <p>Link:</p>
                    <input type="text" name="url_video" class="form-control" value="<?php echo $url_video;?>" placeholder="URL"required>
                    <div class="valid-feedback">Correto.</div>
                    <div class="invalid-feedback">Preencha esse campo.</div>
                </div>

                <div class="form-group">
                    <p>Código:</p>
                    <input type="text" name="codigo_video" class="form-control" value="<?php echo $codigo_video;?>" placeholder="Codigo do video para a imagem"required>
                    <div class="valid-feedback">Correto.</div>
                    <div class="invalid-feedback">Preencha esse campo.</div>
                </div>

                <!--Se a atualização for verdadeira elevai permitir que os bitões executem as funcões propostas-->
                <div class="form-group">
                    <?php 
                    if($update_video == true):
                    ?>
                        <br> <button type="submit" class="btn btn-color slide-btn btn-lg"name="update_video">Alteração</button>
                    <?php else: ?>
                        <br> <button type="submit" class="btn btn-color slide-btn btn-lg"name="save_video">Enviar</button>
                    <?php endif; ?>
                </div>
            </form>
            </div>
            <!--IMAGEM-->
            <div class="col-9 mx-auto col-lg-5 animacao" >
                <img src="/noticias_jogos/src/media/signin-image.jpg" style="border: 4px solid rgba(0, 0, 0, 0.712);" class="rounded-circle mx-auto d-block img-fluid "alt="imagem administrador">
                 <br><p class="text-justify" style="font-size: 20px;"> Para adicionar um novo video ao site Game Notícias, basta colocar as informações exigidas na tela ao lado. Logo abaixo, tem uma tabela que possibilita a visualização geral de todos os videos cadastrados. E lá, tem como Editar ou deletar. Cuidado para não alterar  ou excluir nada que não seja permitido!</p>
            </div>
        </div>
    </div>

    <!--INICIO validação do formulário-->
    <script>
    // Para quando o usuario já estiver preenchido
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Pega do formulario quando for necesario a validação
        var forms = document.getElementsByClassName('needs-validation');
        // Um loop até que esteja tudo correto para enviar o formulario
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
    </script>
    <!--FIM validação do formulário-->


<!--INICIO tabela-->
    <div class="container">
        <br><h2>TABELA EDIÇÃO VÍDEOS <small>Acesso administrador</small></h2>

        <!--Codigo em php para ilustrar todos os dados da tabela-->
            <?php
            $result_video = $conn->query("SELECT * FROM tabela_videos")  or die($mysqli->error);
        // pre_r($result->fetch_assoc());
        //   pre_r($result->fetch_assoc());
            ?>

    <!--E esses dados vão ficar em forma de tabela-->
    <div class="row table-responsive-xl box text-dark">
        <table class="table table-bordered table-sm table-hover table-dark" > <!--style=" height:800px;"-->
            <caption class="text-center text-white">Lista de vídeos</caption>
            <thead class="thead-dark">
                <tr>
                <th>ID</th>
                <th>Nome Vídeo</th>
                <th>URL</th>
                <th>Código vídeo</th>
                <th colspan="2">Ação</th>
            </tr>
            </thead>
    <!--Codigo que puxa as colunas do banco, colocandos na tabela-->
        <?php while ($rows = $result_video->fetch_assoc()):?>
        <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['nome_video'];?></td>
            <td><?php echo $rows['url_video'];?></td>
            <td><?php echo $rows['codigo_video'];?></td>
            
            <!--Botões que ficaram ao lado de cada dados (que puxará a ação dos mesmos em seus respectivos ID) para a editar e excluir-->                    
            <td><a href="video_admin.php?edit_video=<?php echo $rows['id'];?>" class="btn btn-info btn-xs">Editar</a><br></td>
            <td><a href="configuracao_video.php?delete_video=<?php echo $rows['id'];?>" class="btn btn-danger btn-xs">Deletar</a></td>
        </tr>
        <?php endwhile;?>
        </table>
    </div>

            
            <p></p>
        <!--Organizando o array dos dados da tabela-->
            <?php
            function pre_r($array) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
            ?>
        
    </div>
    <!--FIM tabela-->
</section>
<? } ?>

</body>
</html>
<? }else {
        header("Location: index.php");
}?> 