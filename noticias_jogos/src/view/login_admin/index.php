<!--Importantando as dependecias para ativar o banco de dados da section Produtos-->
<? session_start();
    include_once "check-login-admin.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login Administrador</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <script src="/src/Scripts/jquery-3.6.0.js"></script>
    <script src="/src/Scripts/bootstrap.min.js"></script>
    <!-- CSS-->
    <link rel="stylesheet" href="/noticias_jogos/src/css/login_cadastro.css">
    <link rel="stylesheet" href="/noticias_jogos/src/css/fundo_animacao.css">
    <!--Link icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script> 

</head>
<body>

<!--INICIO Login-->
<div class="container ">  <!--container que vai conter o formulario e com o boostrap para o front-and-->
<!--Ativando a animação de fundo-->
  <ul class="circles "><li></li><li></li><li></li><li></li><li></li><li></li></ul>
  <div class="row ">
    <div class="col-md-6 mx-auto ">
      <div class="card">
        <!--Inicio formulario-->
        <form action = "./check-login-admin.php" method="POST" class="box">
        <!--No form vem o arquivo de redirecionamento quando ele for ativo (com o arquivo e o metodo post, postar/mostrat), quando é apertado o botão-->

        <h1>Acesso Administrador</h1>
         <div style="text-align-last: center;">
        <select class="form-select item mb-4" name="role" aria-label="exemplo">
        <option value="admin">Administrador</option></select>
        </div>
        <p> Aréa do adminitrador. Acesso somente de pessoas autorizadas!</p> 


        <!--Alerta quando o usuario esquecer de colocar as informações em algum input-->
        <?php if(isset($_GET['error'])) { ?>
          <div class="alert alert-info" role="alert">
            <?=$_GET['error']?>
          </div>
        <?php }?>
   

      <!--Parte da usuario-->
      <input type="email" class="form-control item" placeholder="Email" name="email" id="email">
      
      <!--Parte da senha-->
      <input type="password" class="form-control item" placeholder="Senha" name="senha" id="senha">
      
      <!---->
     <br> <button type="submit" class="btn btn-color slide-btn btn-lg">Enviar</button>
     
     <br><div><p class="text-center">Não é administrador?<a href="/noticias_jogos/index.php">Acesse aqui.</a></p></div>

  </form>
  <!--Fim do formulário-->
  </div>

  <!--FIM Login-->

</body>
</html>