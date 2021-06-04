<?php session_start();
    include "../login_admin/conexao.php";
?>

<!--<header class="headline">
MENU = Nav Bar-->
    <nav class="navbar navbar-expand-sm bg-black navbar-dark sticky-top">
        <div class="container-fluid">
            <a href="/noticias_jogos/index.php" class="navbar-brand">Game Notícias</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto justify-content-end">
                    <!--<li class="nav-item">
                       <p class="text-white"> Bem vindo(a) <?php echo $_SESSION ['usuario'];?> </p>
                       Erro ao logar com o google
                    </li>-->
                    
                    <li class="nav-item active">
                        <a href="/noticias_jogos/index.php"  class="nav-link">Início</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="/noticias_jogos/noticias.php" class="nav-link">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contato" class="nav-link">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a href="/noticias_jogos/src/view/produto/index.php" class="nav-link">
                            <i class="fas fa-shopping-cart fa-2x" style="font-size: 25px;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="form-inline" method="POST" action="../produto/pesquisar.php">
                            <input class="form-control mr-sm-2" type="text" name="pesquisar" placeholder="Pesquisar">
                            <button class="btn btn-success" type="submit" values="ENVIAR">Buscar</button>
                        </form>
                    </li>
                    <li></li>
                    <li class="nav-item active">
                        <a href="/noticias_jogos/src/view/login_admin/logout.php" class="nav-link"> Sair </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--FIM MENU = Nav
</header>-->