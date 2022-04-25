<!DOCTYPE html>
<html>

<head>

    <title>IE - Instituição de Ensino</title>
    <link rel="icon" type="image/png" href="imagens/IE_favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">


</head>


<body onload="w3_show_nav('menuProf')">

    <?php require '../conectaBD.php'; ?>

    <!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
    <div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

        <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
            <h1 class="w3-xxlarge">Atualização Cadastral de Professor</h1>

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
			// Recebe os dados que foram preenchidos no formulário, com os valores que serão atualizados
			$id      = $_POST['Id'];  // identifica o registro a ser alterado
			$nome    = $_POST['nome'];
			$telefone = $_POST['telefone'];
			$email   = $_POST['email'];
			$dataNascimento  = $_POST['dataNascimento'];
			
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
			$sql = "UPDATE Funcionario SET nome = '$nome', telefone = '$telefone', dataNascimento = '$dataNascimento', email = '$email' , senha = '$md5Senha' WHERE idFuncionario = $id";

			echo "<div class='w3-responsive w3-card-4'>";
			if ($result = mysqli_query($conn, $sql)) {
					echo "Um registro alterado!";
			} else {
				echo "Erro executando UPDATE: " . mysqli_error($conn);
			}
			echo "</div>";
			mysqli_close($conn); //Encerra conexao com o BD

		?>
            </div>
        </div>



        <!-- FIM PRINCIPAL -->
    </div>
    <!-- Inclui RODAPE.PHP  -->
    <?php require 'rodape.php';?>
</body>

</html>