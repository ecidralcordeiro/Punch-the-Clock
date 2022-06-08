<!DOCTYPE html>
<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/Style.css">

<body>
<?php require '../models/header.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
<?php require '../conectaBD.php'; ?>

<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
	<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
		<h1 class="w3-xxlarge">Registro de Carga Horaria</h1>
		<p class="w3-large">
		<div class="w3-code cssHigh notranslate">

		<?php
			error_reporting(E_ERROR | E_PARSE);

			$idCargaHoraria = $_POST['idCargaHoraria'];
			$tipo = $_POST['tipo'];
			$cargaHoraria   = $_POST['cargaHoraria'];
			$noturno   = $_POST['noturno'];
			$quantidadeMarcacoes  = $_POST['quantidadeMarcacoes'];

			// Cria conexão
			$conn = mysqli_connect($servername, $username, $password, $database);

			// Verifica conexão
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			// Configura para trabalhar com caracteres acentuados do português
			mysqli_query($conn,"SET NAMES 'utf8'");
			mysqli_query($conn,'SET character_set_connection=utf8');
			mysqli_query($conn,'SET character_set_client=utf8');
			mysqli_query($conn,'SET character_set_results=utf8');

			// Faz Select na Base de Dados
			$sql = "INSERT INTO cargaHoraria (idCargaHoraria, tipo, cargaHoraria, noturno, quantidadeMarcacoes, empresaId) VALUES (null, '$tipo', '$cargaHoraria', '$noturno', '$quantidadeMarcacoes', '1')";
			echo "<div class='w3-responsive w3-card-4'>";
			if ($result = mysqli_query($conn, $sql)) {
				if ($acao == "Contratar")
					echo "Um registro adicionado!";
				else
					echo "Um registro alterado!";
			} else {
				echo "Erro executando INSERT: " . mysqli_error($conn);
			}
			echo "</div>";
			mysqli_close($conn);  //Encerra conexao com o BD

		?>
	</div>
	</div>
	<!-- FIM PRINCIPAL -->
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require '../models/footer.php'; ?>

</body>
</html>
