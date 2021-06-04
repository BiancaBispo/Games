   <!--Importantando as dependecias para ativar o banco de dados da section Produtos-->
<?php include_once("../noticias_jogos/src/banco/conexao.php");
$result_cursos = "SELECT * FROM cursos";
$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!--FIMM-->
   
   <!--INICIO Carousel dos Produtos-->
   <section id="produtos" class="products py-5 text-center">
    <div class="container">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            <!--Controls
            <div class="controls">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev" ><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next" ><i class="fas fa-chevron-right"></i></a>
            </div>
            Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner text-center" role="listbox">
                <!--First slide-->
                <div class="carousel-item carousel-item-icon active">
                    <div class="row">
                        <div class="container theme-showcase" role="main">
                            <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
                                <div class="col-sm-6 col-md-4 video-anima" style="float:left">
                                    <div class="thumbnail">
                                        <img src="../noticias_jogos/src/media/no-image.jpg" style="width: 18rem ; margin: 1rem" alt="..." >
                                        <div class="caption text-center">
                                            <a href="../noticias_jogos/src/banco/detalhes.php?id=<?php echo $rows_cursos['id']; ?>"><h3><?php echo $rows_cursos['nome']; ?></h3></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!--/.First slide-->


                <!--Controls
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><span class="service-icon"><i class="fas fa-chevron-left"></i></span></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><span class="service-icon"><i class="fas fa-chevron-right"></i></span></a>
                /.Controls-->
            </div>
            <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>
</section>

<!--FIM-->