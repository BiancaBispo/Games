<script src="../produto/evento_categ.js"></script>

<div class="row "> <br><br>

        <div class="col-lg-3 branco ">
        <!--BUSCA/PESQUISAR-->
            <div class="sidebar"> 
                <div class=" widget border-0">
                    <div class="locations">
                        <form class="form-inline" method="POST" action="../produto/pesquisar.php">
                            <div class="input-group md-3">
                            <input class="form-control mr-sm-1" type="text" name="pesquisar" placeholder="Pesquisar">
                            <div class="input-group-append">
                                
                            <button class="btn btn-dark" type="submit">IR</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div><br><br>

                <!--Classificação 1-->
                <form method="POST" action="../produto/categoria_01.php" >
                    <p class="font-weight-bold text-uppercase">Produtos</p>
                    <?php while($rows_class01 = mysqli_fetch_assoc($resultado_class01)){ ?>
                    <div class="custom-control custom-radio mb-3">
                        <input type="submit" onclick="myFunction()" class="custom-control-input" id="<?php echo $rows_class01['cNmNivel1']; ?>" name="categoria1" value="<?php echo $rows_class01['cNmNivel1']; ?>">
                        <label class="custom-control-label" style="font-size: 17px;" for="<?php echo $rows_class01['cNmNivel1']; ?>"><?php echo $rows_class01['cNmNivel1']; ?></label>
                    </div>

                     <?php } ?> <br>
                </form>


                <!--Classificação 2-->
                <form method="POST" action="../produto/categoria_02.php" >
                    <p  class="font-weight-bold text-uppercase">Categorias</p>
                    <?php while($rows_class02 = mysqli_fetch_assoc($resultado_class02)){ ?>
                        <div class="custom-control custom-radio mb-3" >
                        <input type="submit" onclick="myFunction()" class="custom-control-input" id="<?php echo $rows_class02['cNmNivel2']; ?>" name="categoria2" value="<?php echo $rows_class02['cNmNivel2']; ?>">
                            <label class="custom-control-label" style="font-size: 17px;" for="<?php echo $rows_class02['cNmNivel2']; ?>"><?php echo $rows_class02['cNmNivel2'];?></label>
                        </div>
                    <?php } ?> <br>
                </form>
                
                <!--Classificação 3-->
                <form method="POST" action="../produto/categoria_03.php" >
                    <p  class="font-weight-bold text-uppercase">Dispositivos</p>
                    <?php while($rows_class03 = mysqli_fetch_assoc($resultado_class03)){ ?>
                    <div class="custom-control custom-radio mb-3" >
                        <input type="submit" onclick="myFunction()"  class="custom-control-input" id="<?php echo $rows_class03['cNmNivel3']; ?>" name="categoria3" value="<?php echo $rows_class03['cNmNivel3']; ?>">
                        <label class="custom-control-label" style="font-size: 17px;" for="<?php echo $rows_class03['cNmNivel3']; ?>"><?php echo $rows_class03['cNmNivel3'];?></label>
                    </div>
                     <?php } ?><br>
                </form>

                <!--Classificação 4-->
                 <form method="POST" action="../produto/categoria_04.php" >
                    <p class="font-weight-bold text-uppercase">Outros/Acessórios</p>
                    <?php while($rows_class04 = mysqli_fetch_assoc($resultado_class04)){ ?>
                    <div class="custom-control custom-radio mb-3" >
                        <input type="submit" onclick="myFunction()" class="custom-control-input" id="<?php echo $rows_class04['cNmNivel4']; ?>" name="categoria4" value="<?php echo $rows_class04['cNmNivel4']; ?>">
                        <label class="custom-control-label" style="font-size: 17px;" for="<?php echo $rows_class04['cNmNivel4']; ?>"><?php echo $rows_class04['cNmNivel4'];?></label>  
                    </div>
                     <?php } ?><br>
                </form>
          </div> 
    </div>
    
<script>
// Classificação 1,  abrir uma página após a activação do onclik
function myFunction() {
  //window.open("../produto/categoria_02.php");
  //window.location.href = "../produto/index.php";
   //window.location.href = "../produto/categoria_04.php";

}

document.addEventListener("DOMContentLoaded", function(){

    var radio = document.querySelectorAll("input[type='radio']");
   //var checkbox = document.querySelectorAll("input[onclick='myFunction()']");

   for(var item of radio){
      item.addEventListener("click", function(){
         localStorage.s_item ? // verifico se existe localStorage
            localStorage.s_item = localStorage.s_item.indexOf(this.id+",") == -1 // verifico de localStorage contém o id
            ? localStorage.s_item+this.id+"," // não existe. Adiciono a id no loaclStorage
            : localStorage.s_item.replace(this.id+",","") : // já existe, apago do localStorage
         localStorage.s_item = this.id+",";  // não existe. Crio com o id do checkbox
      });
   }

   if(localStorage.s_item){ // verifico se existe localStorage
      for(var item of radio){ // existe, percorro as checkbox
         item.checked = localStorage.s_item.indexOf(item.id+",") != -1 ? true : false; // marco true nas ids que existem no localStorage
      }
   }
});

function Concatena()
{
  //atribui a variável nome o valor do input cujo id = nome
  var radio = document.getElementById('radio').value;
  //atribui a variável numProcesso o valor do input cujo id = numProcesso
  var numProcesso = document.getElementById('submit').value; 
  //concatena as duas variaveis separadas por espaço e joga no value do input cujo id = nomeSacado
  document.getElementById('nomeSacado').value=radio+ " " + submit;
}

/*$(document).ready(function() {
  //set initial state.

  $('#checkbox1').click(function() {
    if (!$(this).is(':checked')) {
        window.location.href = "../produto/categoria_02.php";

    }
  });
});*/
/*function myFunction() {
  document.getElementById("myCheck").click();
  window.location.href = "../produto/categoria_01.php";

}*/
/*function myFunction() {
  var myWindow = window.open("../produto/categoria_01.php", "_self");
  myWindow.document.write("<p></p>");
}*/


</script>

<script>
    $('#form').on('submit', function (e) {
        var nome = $('#nome').val();
        var processo = $('#nome').val();
        $('#nomeSacado').val(nome + ' ' + processo);
    })
</script>
