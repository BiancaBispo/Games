<?php 
//adicionar a conexão do banco
session_start();
include "conexao.php";

if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['role'])) {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    
    $email = test_input($_POST['email']);
    $senha = test_input($_POST['senha']);
    $role= test_input($_POST['role']);

    if (empty($email)) {
        header("Location: index.php?error=Email é obrigatorio");
    }else if (empty($senha)) {
        header("Location: index.php?error=Senha é obrigatorio");
    }else {
        //quando a senha e email estiverem certos
        $senha = md5($senha);
        $sql = "SELECT * FROM  usuarios WHERE email='$email' AND senha='$senha' AND role='$role'" ;
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            //o usuario tem que ser unico (evitando copia)
            $row = mysqli_fetch_assoc($result);
            
            if($row['senha'] === $senha){
                $_SESSION['id'] = $row['id'];
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['nome'] = $row['nome'];
            }
            //encaminhar quando o id for igual
            header("Location: ../edição_dados_admin/index.php");
        }else{
            header("Location: index.php?error=Usuario, senha ou Tipo incorreta");
        }
    }

}else{
    header("Location: index.php");
}


?>
