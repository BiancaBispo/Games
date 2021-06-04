<?php 
include '../login_admin/conexao.php';
error_reporting(0);

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $usuario = $_POST['usuario'];
  $senha = md5($_POST['senha']);
  $csenha = md5($_POST['csenha']);

    if($senha == $csenha) {
        $sql = "SELECT * FROM usuarios WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if(!$result-> num_rows > 0) {
            $sql = "INSERT INTO usuarios (email,usuario,senha) VALUES ('$email', '$usuario', '$senha')";
            $result = mysqli_query($conn, $sql);
            if(!$result){
               // echo "<script> alert('Registro feito com sucesso!!') </script>";
                //tirar o registro quando o formulario é enviado
                $email = "";
                $usuario = "";
                $senha = "";
                $csenha = "";
                $nome = "";

            }else{ 
            header("Location: ./index.php");
          //  echo "<script> alert('Registro feito com sucesso!!') </script>";
          }  

         }else{echo "<script> alert('Email já existe') </script>";} 
    }else {echo "<script> alert('As senhas não estão identicas.') </script>";}
}
//else{echo "<script> alert('Ops! Algo de errado aconteceu.') </script>";}  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="fundo_registro.css">
    <link rel="stylesheet" href="/noticias_jogos/src/css/login_cadastro.css">
    <link rel="stylesheet" href="/noticias_jogos/src/css/fundo_animacao.css">
    <!--Link icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<!--API GOOGLE-->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <script src="/src/Scripts/jquery-3.6.0.js"></script>
    <script src="/src/Scripts/bootstrap.min.js"></script>

</head>
<body>

  <div class="container">  <!--container que vai conter o formulario e com o boostrap para o front-and-->
  <!--Ativando a animação de fundo-->
  <ul class="circles"><li></li><li></li><li></li><li></li><li></li><li></li></ul>
  <div class="row">
      <div class="col-md-6 mx-auto ">
        <div class="card">
          <form action="" method="POST" class="box">
              <h1>Cadastro</h1>
              <p> Entre com seu Email e senha para acessar os produtos</p> 

              <input type="email" class="form-control item"  placeholder="Email" name="email" value="<?php echo $email; clearstatcache(); ?>" required>

              <input type="usuario" class="form-control item"  placeholder="Usuario" name="usuario" value="<?php echo $usuario; clearstatcache();?>" required>

              <input type="password" class="form-control item" placeholder="Senha" name="senha" value="<?php echo $_POST['senha']; clearstatcache();?>" required>

              <input type="password" class="form-control item" placeholder="Confirmar Senha" name="csenha"value="<?php echo $_POST['csenha']; clearstatcache();?>" required>

              <button type="submit" name="submit" class="btn btn-color slide-btn btn-lg">Cadastrar</button>

              <div> <br><p class="text-muted text-center">Já tem uma conta? <a href="./index.php">Acesse aqui!</a></p></div>
              
            

            </div>

          </form>
          </div>  
      </div>
    </div>
  </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
