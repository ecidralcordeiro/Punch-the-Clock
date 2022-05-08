<!DOCTYPE html>
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
        <nav id="subHeader" class="navbar navbar-light bg-light" style="margin-top:5px; border-bottom:3px solid #7bd5dd">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-left:25px">
            <img src="../../imagens/Maionese.jpeg" alt="mdo" width="40" height="40" class="rounded-circle">
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="#">Configurações</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Sair</a>
                </div>
            </div>
            </a>
            <ul class="nav nav-pills" style="margin-right:25px">
                <li class="nav-item" style="margin-right:15px">
                    <input class="form-control mr-sm-2" type="search" placeholder="Texto" aria-label="Search">
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
                </li>
        </ul>
        </nav>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>
<?php require '../conectaBD.php'; ?>
<!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
	<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
		<h1 class="w3-xxlarge">Registro de Funcionarios</h1>
		<p class="w3-large">
		<div class="w3-code cssHigh notranslate">
	<!-- Acesso em:-->
		<?php

		date_default_timezone_set("America/Sao_Paulo");
		$data = date("d/m/Y H:i:s",time());
		echo "<p class='w3-small' > ";
		echo "Acesso em: ";
		echo $data;
		echo "</p> "
		?>

		<!-- Acesso ao BD-->
		<?php
			$nome    = $_POST['nome'];
			$CPF = $_POST['CPF'];
			$dataNascimento   = $_POST['dataNascimento'];
			$telefone  = $_POST['telefone'];
			$empresaId  = $_POST['empresaId'];
			$cargoId  = $_POST['cargoId'];
			$cargaHorariaId = $_POST['cargaHorariaId'];
			$email  = $_POST['email'];
			$senha  = $_POST['senha'];
			$acao  = $_POST['acaoForm'];
		
			
			if ($dataNascimento != ""){
				if (strpos($dataNascimento,"-") != false){
					$strData = explode('-',$dataNascimento);
				}else {
					$strData = explode('/',$dataNascimento);
				}
			
				$ano = $strData[2];
				$mes = $strData[1];
				$dia = $strData[0];

				$nova_data = $ano.'-'.$mes.'-'.$dia;
			}
			else
				$nova_data = "";
			
			//Criptografa Senha
			$md5Senha = md5($_POST['senha']);

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
			$sql = "INSERT INTO Funcionario ( nome, telefone,dataNascimento, estadoCivil, cargoId, empresaId,cargaHorariaId, email, Senha) VALUES ('$nome', '$CPF', '$dataNascimento', '$telefone', '$empresaId', '$cargoId','$cargaHorariaId' '$email', '$md5Senha')";
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require '../models/footer.php'; ?>

</body>
</html>
