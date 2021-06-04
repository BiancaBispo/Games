<?php 
   //session_start();
  
  //Importanto a coneção do banco
   include_once 'conexao_dbvendas.php';
   
   // Permite que os dados no input fiquem null, vazio, antes e apos o uso
   $id=0;
   $update = false;
   $cNmproduto  = '';
   $nPreco = '';
   $nEstoque = '';
   $cNmNivel1= '';
   $cNmNivel2= '';
   $cNmNivel3= '';
   $cNmNivel4= '';
   $cImagem = '';

   //Se for solocitado a opção  'save', (visto no botão para criar novos dados),
   if(isset($_POST['save'])) {
      
      $cNmproduto = $_POST['cNmproduto'];
      $nPreco = $_POST['nPreco'];
      $nEstoque = $_POST['nEstoque'];
      $cNmNivel1= $_POST['cNmNivel1'];
      $cNmNivel2= $_POST['cNmNivel2'];
      $cNmNivel3= $_POST['cNmNivel3'];
      $cNmNivel4= $_POST['cNmNivel4'];
      $cImagem = $_FILES['cImagem']['name'];


      $validate_img_extensao = $_FILES['cImagem']['type'] == "image/jpg" || $_FILES['cImagem']['type'] == "image/png" || 
      $_FILES['cImagem']['type'] == "image/jpeg";
      
      if($validate_img_extensao)
      {
         if(file_exists("upload/" . $_FILES['cImagem']['name']))
         {
            $store = $_FILES['cImagem']['name'];
            $_SESSION['status']= "Image já existe. '.$store.'";
            header("Location: produto_admin.php");
   
         }else{
            if(!$result-> num_rows > 0) {
            // Colocara, atraves do Mysql, os valores solicitados no input, na tabela "users"
               $sql = "CALL InserirProduto ('$cNmproduto','$nPreco', '$nEstoque', '$cNmNivel1','$cNmNivel2','$cNmNivel3','$cNmNivel4','$cImagem')";
           
           $query = mysqli_query($conn, $sql);
               if($query){
               move_uploaded_file($_FILES['cImagem']['tmp_name'], "upload/".$_FILES["cImagem"]["name"]);
               //mensagens de alerta quando a função for concluida
               $_SESSION['success'] ="Adicionado com sucesso";
               header("Location: produto_admin.php");
   
                  if(!$result){
                     //tirar o registro quando o formulario é enviado
                        $cNmproduto  = '';
                        $nPreco = '';
                        $nEstoque = '';
                        $cNmNivel1= '';
                        $cNmNivel2= '';
                        $cNmNivel3= '';
                        $cNmNivel4= '';
                        $cImagem = '';
                  }
               }else{
                  $_SESSION['success'] = "Não foi possível adicionar";
                  header("Location: produto_admin.php");
               }
            }
         }
      }else{
         header("Location: produto_admin.php?error=Formato do arquivo incorreto!");
      }
   }

   //Se for solicitado a opção delete (nos botões do index, que tem em cada dado da tabela) 
   if(isset($_GET['delete'])){
      $id = $_GET['delete'];

      //Deleterá os arquivos da tabela users através do id
      $sql = "DELETE FROM tbprod001 WHERE nCdProduto=$id";
      mysqli_query($conn, $sql);

       $query = mysqli_query($conn, $sql);
               if($query){
               unlink($_FILES['cImagem']['tmp_name'], "upload/".$_FILES["cImagem"]["name"]);
               //mensagens de alerta quando a função for concluida
               $_SESSION['success'] ="Adicionado com sucesso";
               header("Location: produto_admin.php");
               }
      //mensagens de alerta quando a função for concluida
      $_SESSION['message'] = "Produto deletado com sucesso!";
      $_SESSION['msg_type'] = "danger";
      header("Location: produto_admin.php");

   }

   //Se for solicitado a opção update, os dados que ficaram nos input e puxado por aqui
   if(isset($_GET['edit'])){
      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }

      $id = validate($_GET['edit']);
      $id = $_GET['edit'];
      $update = true;
      
      //Seleciona todos os dados da tabela users através do id
      $sql = "SELECT * FROM tbprod001 WHERE nCdProduto=$id";
      $result = mysqli_query($conn, $sql);

      //Quando o resultado for 1, o row permite colocar os dados nos inputs 
      if (mysqli_num_rows($result) == 1) {
         $row = mysqli_fetch_assoc($result);
         $cNmproduto = $row['cNmproduto'];
         $nPreco = $row['nPreco'];
         $nEstoque = $row['nEstoque'];
         $cNmNivel1= $row['cNmNivel1'];
         $cNmNivel2= $row['cNmNivel2'];
         $cNmNivel3= $row['cNmNivel3'];
         $cNmNivel4= $row['cNmNivel4'];
         $cImagem = $row['cImagem'];
      }
   }

   //Se for solicitado a opção update (nos botões do index, que tem em cada dado da tabela) 
   if(isset($_POST['update'])){
      $id = $_POST['nCdProduto'];
      $cNmproduto = $_POST['cNmproduto'];
      $nPreco = $_POST['nPreco'];
      $nEstoque = $_POST['nEstoque'];
      $cNmNivel1= $_POST['cNmNivel1'];
      $cNmNivel2= $_POST['cNmNivel2'];
      $cNmNivel3= $_POST['cNmNivel3'];
      $cNmNivel4= $_POST['cNmNivel4'];
      $cImagem = $_FILES['cImagem']['name'];


      $sql_query= "SELECT * FROM tbprod001 WHERE nCdProduto=$id";
      $query_image= mysqli_query($conn, $sql_query);
      foreach($query_image as $fa_row)
      {
         if($cImagem == NULL){
            //Atualizar imagem se já existir 
            $imagem_data = $fa_row['cImagem'];
         }else{
            //Atualizar com a nova imagem e deletar a imagem antiga que esta no diretório
            if($img_path = "upload/".$fa_row['cImagem'])
            {
               unlink($img_path);
               $imagem_data = $cImagem;

            }
         }
      }


   //Seleciona todos os dados da tabela users para a edição (update) através do id
      $sql = "CALL AtualizarProduto ('$cNmproduto', '$nPreco', '$nEstoque', '$cNmNivel1', '$cNmNivel2', '$cNmNivel3', '$cNmNivel4', '$imagem_data', $id)";
      $query= mysqli_query($conn, $sql);
      
      if($query)
      {
         if($cImagem == NULL)
         {
            //Atualizar imagem se já existir 
            $_SESSION['success'] = "Imagem já existe";
            header("Location: produto_admin.php");

         }else{
            //Atualizar com a nova imagem e deletar a imagem antiga que esta no diretório
            move_uploaded_file($_FILES['cImagem']['tmp_name'], "upload/".$_FILES['cImagem']['name']);
            $_SESSION['success'] = "Adicionado!!";
            header("Location: produto_admin.php");
         }
      
      }else{
         $_SESSION['success'] = "Erro ao adicionar";
         header("Location: produto_admin.php");
      }

      //mensagens de alerta quando a função for concluida
      $_SESSION['message'] = "Produto alterado com sucesso!";
      $_SESSION['msg_type'] = "warning";
   }
   
?>