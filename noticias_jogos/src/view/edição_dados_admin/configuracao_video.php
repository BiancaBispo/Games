<?php 
   //session_start();
  
  //Importanto a coneção do banco
   include_once 'conexao_dbvendas.php';
   
   // Permite que os dados no input fiquem null, vazio, antes e apos o uso
   $id=0;
   $update_video = false;
   $nome_video = '';
   $url_video = '';
   $codigo_video = '';

   //Se for solocitado a opção  'save', (visto no botão para criar novos dados),
   if(isset($_POST['save_video'])) {
      
      $nome_video = $_POST['nome_video'];
      $url_video = $_POST['url_video'];
      $codigo_video = $_POST['codigo_video'];
      
      if(!$result-> num_rows > 0) {

      // Colocara, atraves do Mysql, os valores solicitados no input, na tabela "users"
      $sql = "CALL InserirVideo ('$nome_video','$url_video','$codigo_video')";
      
      mysqli_query($conn, $sql);
      //mensagens de alerta quando a função for concluida
      $_SESSION['message'] = "Video salvo com sucesso!";
      $_SESSION['msg_type'] = "success";
         if(!$result){
            //tirar o registro quando o formulario é enviado
            $nome_video = "";
            $url_video = "";
            $codigo_video = "";
         }
      }else{echo "<script> alert('Algo deu errado!') </script>";} 

      //Depois de ter feito isso, lê o arquivo solicitado 
      header("Location: video_admin.php");
   }

   //Se for solicitado a opção delete (nos botões do index, que tem em cada dado da tabela) 
   if(isset($_GET['delete_video'])){
      $id = $_GET['delete_video'];

      //Deleterá os arquivos da tabela users através do id
      $sql = "DELETE FROM tabela_videos WHERE id=$id";
      mysqli_query($conn, $sql);

      //mensagens de alerta quando a função for concluida
      $_SESSION['message'] = "Video deletado com sucesso!";
      $_SESSION['msg_type'] = "danger";
      header("Location: video_admin.php");

   }

   //Se for solicitado a opção update, os dados que ficaram nos input e puxado por aqui
   if(isset($_GET['edit_video'])){
      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }

      $id = validate($_GET['edit_video']);
      $id = $_GET['edit_video'];
      $update_video = true;
      
      //Seleciona todos os dados da tabela users através do id
      $sql = "SELECT * FROM tabela_videos WHERE id=$id";
      $result = mysqli_query($conn, $sql);

      //Quando o resultado for 1, o row permite colocar os dados nos inputs 
      if (mysqli_num_rows($result) == 1) {
         $row = mysqli_fetch_assoc($result);
         $nome_video = $row['nome_video'];
         $url_video = $row['url_video'];
         $codigo_video = $row['codigo_video'];
      }
   }
   
   //Se for solicitado a opção update (nos botões do index, que tem em cada dado da tabela) 
   if(isset($_POST['update_video'])){
      $id = $_POST['id'];
      $nome_video = $_POST['nome_video'];
      $url_video = $_POST['url_video'];
      $codigo_video = $_POST['codigo_video'];

      //Seleciona todos os dados da tabela users para a edição (update) através do id
      $sql = "CALL AtualizarVideo ('$nome_video', '$url_video', '$codigo_video', $id)";
      mysqli_query($conn, $sql);

      //mensagens de alerta quando a função for concluida
      $_SESSION['message'] = "Produto alterado com sucesso!";
      $_SESSION['msg_type'] = "warning";
      header("Location: video_admin.php");
   }
?>