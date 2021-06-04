<!--Importantando as dependecias para ativar o banco de dados da section Produtos-->
<? session_start();
    include_once "check-login.php";
?>
<!--FIMM-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <script src="/src/Scripts/jquery-3.6.0.js"></script>
    <script src="/src/Scripts/bootstrap.min.js"></script>
    <!-- CSS-->
    <link rel="stylesheet" href="/noticias_jogos/src/css/login_cadastro.css"> 
    <link rel="stylesheet" href="/noticias_jogos/src/view/login_novo/login_cadastro.css"> 

    <link rel="stylesheet" href="/noticias_jogos/src/css/fundo_animacao.css">

<!--API GOOGLE-->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--Link icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>

  <!--INICIO Login-->
  <div class="container ">  <!--container que vai conter o formulario e com o boostrap para o front-and-->
  <!--Ativando a animação de fundo-->
  <ul class="circles "><li></li><li></li><li></li><li></li><li></li><li></li></ul>
    
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          
          <!--Inicio formulario-->
          <form action = "./check-login.php" method="POST" class="box">
          <!--No form vem o arquivo de redirecionamento quando ele for ativo (com o arquivo e o metodo post, postar/mostrat), quando é apertado o botão-->
            
              <h1>Acesso</h1>
            <!-- <label class="text-muted" name="role" selected value="user">Usuário</label><br> -->
              
            <div style="text-align-last: center;">
            <select class="form-select mb-4 center-content-center" name="role" aria-label="exemplo" >
            <option selected value="user" >Usuario</option></select>
            </div>
            <p > Entre com seu Email e senha para acessar os produtos</p> 

            <!--Alerta quando o usuario esquecer de colocar as informações em algum input-->
            <?php if(isset($_GET['error'])) { ?>
              <div class="alert alert-info" role="alert">
                <?=$_GET['error']?>
              </div>
            <?php }?>

            <div style="text-align-last: center;">

              <!--Parte da usuario-->
              <input type="email"  placeholder="Email" name="email" id="email">
            <!--Parte da senha-->
              <input type="password" placeholder="Senha" name="senha" id="senha">

              <!---->
              <button type="submit" class="btn btn-color slide-btn btn-lg">Enviar</button>

              <div> <br><p class="text-muted">Não tem uma conta? <a href="./registro.php">Cadastra-se aqui!!</a></p></div>
                
              <br><p class="text-muted">Tem uma conta do Google? Utilize ela! </p>
              <div style="text-align-last: center;">
                  <div class="g_id_signin" data-size="large" data-theme="outline"
                          data-text="sign_in_with" data-shape="pill" data-locale="pt-BR"data-logo_alignment="center">
                  </div>
              </div>
              <!--Ativando o login pelo GOOGLE-->
              <div id="g_id_onload"
                  data-context="signin"
                  data-client_id="764477028625-08j96toh94ap212q23mt6k5qnbchndfu.apps.googleusercontent.com"
                  data-context="use"
                  data-login_uri="http://localhost/noticias_jogos/src/view/produto/index.php">
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
 </div>
</body>
</html>