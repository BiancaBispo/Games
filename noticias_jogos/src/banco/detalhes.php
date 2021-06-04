<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 
<?php include_once("conexao.php");
$id_produto = $_GET['id'];
$result_cursos = "SELECT * FROM tabela_produtos WHERE id='$id_produto'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$row_cursos = mysqli_fetch_assoc($resultado_cursos);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/contrução.ico" type="image/x-icon">
		<title>Construção</title>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><?php echo $row_cursos['nome_produto']; ?></h1>
				<img src="../media/fundo 2.jpeg" alt="..." >
			</div>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Nome</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<?php echo $row_cursos['nome']; ?>
				</div>
			  </div>

			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>