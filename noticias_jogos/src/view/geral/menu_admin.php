<?php session_start();
    include "../login_admin/conexao.php";
?>

<!--INICIO MENU BAR-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/noticias_jogos/src/view/edição_dados_admin/index.php"> <i class="fas fa-cog "></i></a>
        <a style="font-size: 17px;"class="navbar-brand" href="#configuracao">Bem vindo(a) <?php echo $_SESSION ['usuario'];?></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/noticias_jogos/src/view/edição_dados_admin/index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/noticias_jogos/src/view/edição_dados_admin/video_admin.php">Vídeo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/noticias_jogos/src/view/edição_dados_admin/produto_admin.php">Produto</a>
                </li>    
                <li class="nav-item">
                    <a href="../login_admin/logout.php" class="btn btn-light">Sair </a>
                </li>
            </ul>
        </div> 
    </div> 
</nav>
<!--FIM MENU BAR-->