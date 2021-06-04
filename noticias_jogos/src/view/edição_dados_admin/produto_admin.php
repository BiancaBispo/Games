<? session_start();
    include "/noticias_jogos/src/view/login_admin/conexao.php";
    if(isset($_SESSION['email']) && isset ($_SESSION['id']) && isset ($_SESSION['role'])) { 

    //include_once("conexao_dbvendas.php");
    //$result_class01 = sprintf("SELECT DISTINCT cNmNivel1 FROM tbprod001");
   // $resultado_class01 = mysqli_query($conn, $result_class01);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https:///maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./Scripts/jquery-3.6.0.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
     <script src="../edição_dados_admin/evento.js"></script>

    
    <!--Fonte-->
    <link rel="stylesheet" href="/noticias_jogos/src/css/tabela.css">
    <link rel="stylesheet" href="/noticias_jogos/src/css/animacao.css">
     
    <!--Link icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    
    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
    <title>Edição dados Produtos</title>
    
    <style>

#header-site-vid{
    background-image: url('/noticias_jogos/src/media/fundo_admin/fundo_simples_azul.png');
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
<body >
    <?php include_once '../geral/menu_admin.php';?>
    <? phpif ($row['role'] == 'admin') {?> <!--Seção para o admin-->
    <!--<br><p></p>-->

    <?php include_once 'configuracao_produto.php';?> <!--incluindo o php que possibilita a criação, update e delete dos dados-->

<section id="header-site-vid">

    <!--Parte dos inputs para criar ou atualizar os dados-->
    <div class="container-fluid col-lg-11 ">
        <div class="row right-content-center">
        <div class="card card-tb" style="width: 560px; height:1400px;">
           
           <?php if(isset($_SESSION['success'])){
                echo "<h1>".$_SESSION['success']."</h1>";
                unset($_SESSION['success']);
            }?>

            <h1 class="anima">Produto</h1> <br> <br>

            <form action="configuracao_produto.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                
                <input type="hidden" name="nCdProduto" value="<?php echo $id;?>">
                
                <!--Formatação para adicionar as caixas para adicionar, editar e exluir-->
                <div class="form-group">
                    <p>Nome:</p> <!--o input puxará o dado do banco que esta direcionado ao mesmo, neste cado é o nome, através do php-->
                    <input type="text" name="cNmproduto" class="form-control" value="<?php echo $cNmproduto;?>" placeholder="Nome" required>   
                    <div class="valid-feedback">Correto.</div>
                    <div class="invalid-feedback">Preencha esse campo.</div>
                </div>
               
                <div class="form-group">
                    <p>Preço:</p>
                    <input type="text" name="nPreco" class="form-control" value="<?php echo $nPreco ;?>" placeholder="Preço" required>
                    <div class="valid-feedback">Correto.</div>
                    <div class="invalid-feedback">Preencha esse campo.</div>
                    
                </div>

                <div class="form-group">
                    <p>Estoque:</p>
                    <input type="text" name="nEstoque" class="form-control" value="<?php echo $nEstoque;?>" placeholder="Estoque" required>
                    <div class="valid-feedback">Correto.</div>
                    <div class="invalid-feedback">Preencha esse campo.</div>
                </div>
    
                <!--Classificação 1-->
                <?php include_once("../edição_dados_admin/conexao_dbvendas.php");?>
                <div class="form-group">
                    <p>Classificação 1:</p>
                    
                    <select required id="opcaoSelecionada" name="cNmNivel1" class="form-control" onchange="OcultaClass(this.value)" 
                    style=" background: none; color: rgb(211, 211, 211); display: block;
                    margin: 5px auto; text-align: center; border: 2px solid #3498db; width: 300px;">

                        <?php 
                        if($update == false){
                            $result = sprintf("SELECT DISTINCT cNmNivel1 FROM tbprod001");
                            $resultado = mysqli_query($conn, $result);
                            
                            while($rows = mysqli_fetch_assoc($resultado)){ ?>
                            <option hidden>Selecione uma opção</option>
                            <option  class="form-control" name="cNmNivel1" value="<?php echo $rows['cNmNivel1'];?>"><?php echo $rows['cNmNivel1'];?></option>
                        <?php } ?>
                        
                        <?php }else { ?>
                        <option  class="form-control" name="cNmNivel1" value="<?php echo $cNmNivel1;?>"><?php echo $cNmNivel1;?></option>
                        
                            <?php 
                            $result2 = sprintf("SELECT DISTINCT cNmNivel1 FROM tbprod001");
                            $resultado2 = mysqli_query($conn, $result2);
                            while($rows2 = mysqli_fetch_assoc($resultado2)){ ?>

                            <option  class="form-control" name="cNmNivel1" value="<?php echo $rows2['cNmNivel1'];?>"><?php echo $rows2['cNmNivel1'];?></option>
                        <?php } }?> 

                        <option class="text-dark" value="Criar">Criar</option>
                    </select>

                    <div id="idClass" class="form-group">
                        <input name="cNmNivel1" id="inputClass" type="text" class="form-control "  placeholder="Nova classificação" disabled
                        style="display: none; text-align: center; border: 2px solid #eb830de7; transition: 0.25s;cursor: pointer;">   
                    </div>
                </div>

                <!--Classificação 2-->
                    <div class="form-group">
                    <p>Classificação 2:</p>
                    <select name="cNmNivel2" required id="opcaoSelecionada2" class="form-control" onchange="OcultaClass2(this.value)"
                    style=" background: none; color: rgb(211, 211, 211); display: block;
                    margin: 5px auto; text-align: center; border: 2px solid #3498db; width: 300px;"> 

                        <?php if($update == false){
                        $result = sprintf("SELECT DISTINCT cNmNivel2 FROM tbprod001");
                        $resultado = mysqli_query($conn, $result);?>

                        <?php                        
                        while($rows = mysqli_fetch_assoc($resultado)){ ?>  
                        
                        <option hidden>Selecione uma opção</option>
                        <option  class="form-control" name="cNmNivel2" value="<?php echo $rows['cNmNivel2'];?>"><?php echo $rows['cNmNivel2'];?></option>
                        <?php } ?>

                        <?php }else { ?>
                        <option  class="form-control" name="cNmNivel2" value="<?php echo $cNmNivel2;?>"><?php echo $cNmNivel2;?></option>

                        <?php 
                            $result2 = sprintf("SELECT DISTINCT cNmNivel2 FROM tbprod001");
                            $resultado2 = mysqli_query($conn, $result2);
                            while($rows2 = mysqli_fetch_assoc($resultado2)){ ?>

                            <option  class="form-control" name="cNmNivel2" value="<?php echo $rows2['cNmNivel2'];?>"><?php echo $rows2['cNmNivel2'];?></option>
                        <?php }} ?> 

                        <option class="text-dark" value="Criar">Criar</option>
                    </select>

                    <div id="idClass2" class="form-group" >
                        <input name="cNmNivel2" id="inputClass2" type="text" class="form-control" disabled
                        style="display: none; text-align: center; border: 2px solid #eb830de7; transition: 0.25s;cursor: pointer;">    
                    </div>
                </div>

                <!--Classificação 3-->
                <div class="form-group">
                    <p>Classificação 3: </p>
                    <select name="cNmNivel3" id="opcaoSelecionada3" class="form-control" onchange="OcultaClass3(this.value)"
                    style=" background: none; color: rgb(211, 211, 211); display: block;
                    margin: 5px auto; text-align: center; border: 2px solid #3498db; width: 300px;">
                        

                        <?php if($update == false){
                        $result = sprintf("SELECT DISTINCT cNmNivel3 FROM tbprod001 WHERE cNmNivel3 <> ''");
                        $resultado = mysqli_query($conn, $result);
                        
                        while($rows = mysqli_fetch_assoc($resultado)){ ?>
                        <option hidden>Selecione uma opção</option>
                        <option  class="form-control" name="cNmNivel3" value="<?php echo $rows['cNmNivel3'];?>"><?php echo $rows['cNmNivel3'];?></option>
                        <?php } ?>

                        <?php }else { ?>
                        <option  class="form-control" name="cNmNivel3" value="<?php echo $cNmNivel3;?>"><?php echo $cNmNivel3;?></option>

                        <?php 
                        $result2 = sprintf("SELECT DISTINCT cNmNivel3 FROM tbprod001  WHERE cNmNivel3 <> ''");
                        $resultado2 = mysqli_query($conn, $result2);
                        while($rows2 = mysqli_fetch_assoc($resultado2)){ ?>

                        <option  class="form-control" name="cNmNivel3" value="<?php echo $rows2['cNmNivel3'];?>"><?php echo $rows2['cNmNivel3'];?></option>

                        <?php }} ?> 

                        <option class="text-dark" value="Criar">Criar</option>
                    </select>
                    <div id="idClass3" class="form-group" >
                        <input name="cNmNivel3" id="inputClass3" type="text" class="form-control" disabled
                        style="display: none; text-align: center; border: 2px solid #eb830de7; transition: 0.25s;cursor: pointer;">    
   
                    </div>
                </div>

                <!--Classificação 4-->
                <div class="form-group">
                    <p>Classificação 4: </p>
                    <select name="cNmNivel4" id="opcaoSelecionada4" class="form-control" onchange="OcultaClass4(this.value)"
                    style=" background: none; color: rgb(211, 211, 211); display: block;
                    margin: 5px auto; text-align: center; border: 2px solid #3498db; width: 300px;">
                        

                        <?php if($update == false){
                        $result = sprintf("SELECT DISTINCT cNmNivel4 FROM tbprod001 WHERE cNmNivel4 <> ''");
                        $resultado = mysqli_query($conn, $result);
                        
                        while($rows = mysqli_fetch_assoc($resultado)){ ?>
                        <option hidden>Selecione uma opção</option>
                        <option  class="form-control" name="cNmNivel4" value="<?php echo $rows['cNmNivel4'];?>"><?php echo $rows['cNmNivel4'];?></option>
                        <?php } ?>

                        <?php }else { ?>
                        <option  class="form-control" name="cNmNivel4" value="<?php echo $cNmNivel4;?>"><?php echo $cNmNivel4;?></option>
                        
                        <?php 
                        $result2 = sprintf("SELECT DISTINCT cNmNivel4 FROM tbprod001  WHERE cNmNivel4 <> ''");
                        $resultado2 = mysqli_query($conn, $result2);
                        while($rows2 = mysqli_fetch_assoc($resultado2)){ ?>

                        <option  class="form-control" name="cNmNivel4" value="<?php echo $rows2['cNmNivel4'];?>"><?php echo $rows2['cNmNivel4'];?></option>

                        <?php } }?> 

                        <option class="text-dark" value="Criar">Criar</option>
                    </select>
                    <div id="idClass4" class="form-group" >
                        <input name="cNmNivel4" id="inputClass4" type="text" class="form-control" disabled
                        style="display: none; text-align: center; border: 2px solid #eb830de7; transition: 0.25s;cursor: pointer;">    
                    </div>
                </div>

                <!--IMAGEM-->
                <div class="form-group">
                    <p for="imagem">Imagem:</p>
                    <input class="text-center" type="file" name="cImagem"  id="update" class="form-control" value="<?php echo $cImagem ;?>" >

                    <div class="text-center anima">
                        <br><?php echo '<img src="upload/'.$cImagem .'" widht ="100px;" height="100px" alt="Imagem">';?>
                    </div>
                </div>

                <div class="form-group mx-auto">
                <!--Se a atualização for verdadeira ele vai permitir que os bitões executem as funcões propostas-->
                    <?php 
                    if($update == true):
                    ?>
                        <button type="submit" class=" btn btn-color slide-btn btn-lg"name="update">Alteração</button>
                    <?php else: ?>
                        <button type="submit" class=" btn btn-color slide-btn btn-lg"name="save">Enviar</button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
        <!--IMAGEM-->
            <div class="col-9 mx-auto col-lg-5 animacao" style="width: 500px; height:910px;" >
            <br><br>
                <img src="/noticias_jogos/src/media/signup-image.jpg" class=" mx-auto d-block img-fluid "alt="imagem administrador">
                <br><p class="text-justify"style="top: 60%;font-size: 20px;"> Para adicionar um novo Produto ao site Game Notícias, basta colocar as informações exigidas na tela ao lado. Logo abaixo, tem uma tabela que possibilita a visualização geral de todos os Produtos cadastrados. E lá, tem como Editar ou deletar. Cuidado para não alterar  ou excluir nada que não seja permitido!</p>
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


    <div class="container">
        <h2>TABELA EDIÇÃO PRODUTOS <small>Acesso administrador</small></h2>
        <!--Codigo em php para ilustrar todos os dados da tabela-->
        <?php $result = $conn->query("SELECT * FROM tbprod001") or die($mysqli->error);?>

        <!--E esses dados vão ficar em forma de tabela-->
        <div class="row justify-content-center table-responsive-xl text-dark text-center"  >
            <table class="table table-bordered table-sm table-striped table-hover table-dark" >
            <caption class="text-center text-dark">Lista dos Produtos</caption>
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Classificação 1</th>
                    <th>Classificação 2</th>
                    <th>Classificação 3</th>
                    <th>Classificação 4</th>
                    <th>Imagem</th>
                    <th colspan="2">Ação</th>
                </tr>
                </thead>
        <!--Codigo que puxa as colunas do banco, colocandos na tabela-->
            <?php while ($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['nCdProduto'];?></td>
                <td><?php echo $row['cNmproduto'];?></td>
                <td><?php echo'R$' .number_format($row['nPreco'],2,',','.').  '<br/>';?></td>
               <!-- <td>R$<?php// echo $row['nPreco'];?></td>-->
                <td><?php echo $row['nEstoque'];?></td>
                <td><?php echo $row['cNmNivel1'];?></td>
                <td><?php echo $row['cNmNivel2'];?></td>
                <td><?php echo $row['cNmNivel3'];?></td>
                <td><?php echo $row['cNmNivel4'];?></td>

               <!-- <td><?php echo $row['cImagem'];?></td> -->
                <td><?php echo '<img src="upload/'.$row['cImagem'].'" widht ="100px;" height="100px" alt="Imagem">';?></td>

                <!--Botões que ficaram ao lado de cada dados (que puxará a ação dos mesmos em seus respectivos ID) para a editar e excluir-->
                <td><a href="produto_admin.php?edit=<?php echo $row['nCdProduto'];?>" class="btn btn-info">Editar</a><br></td>
                <td><a href="configuracao_produto.php?delete=<?php echo $row['nCdProduto'];?>" class="btn btn-danger">Deletar</a></td>
            </tr>
            <?php endwhile;?>
            </table>
            
        </div><p></p>

        <!--Organizando o array dos dados da tabela-->
        <?php function pre_r($array) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';}?>
    </div>
</section>

<? } ?>
</body>
</html>
<?}else {
    header("Location: index.php");
}?> 