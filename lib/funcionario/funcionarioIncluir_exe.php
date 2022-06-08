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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
	</script>

<?php require '../conectaBD.php'; ?>
	<div class="" style="height:300px">
		<center>
		<img src="../../imagens/25404.png" style="height:250px">
		</center>
		<center>
		<h1>Tudo Certo!</h1>
		</center>
		<br><br><br>
		
		<?php

		
			$nome    = $_POST['nome'];
			$CPF = $_POST['CPF'];
			$dataNascimento   = $_POST['dataNascimento'];
			$dataContratacao   = $_POST['dataDeInicio'];
			$telefone  = $_POST['telefone'];
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
			$sql = "INSERT INTO Funcionario (idFuncionario, nome, CPF, dataNascimento, dataContratação, telefone, sexo, estadoCivil, email, senha, empresaId, cargoId, cargaHorariaId ) VALUES ('', '$nome', '$CPF', '$nova_data', '$nova_data', '$telefone', 'NULLO', 'NULLO', '$email', '$md5Senha', '1', '$cargoId', '$cargaHorariaId')";
			echo "<div class='w3-responsive w3-card-4'>";
			if ($result = mysqli_query($conn, $sql)) {
				if ($acao == "Contratar")
					echo "<p1>Registro Adcionado com sucesso!</p1>";
				else
					echo "Um registro alterado!";
			} else {
				echo "Erro executando INSERT: " . mysqli_error($conn);
			}
			echo "</div>";
			mysqli_close($conn);  //Encerra conexao com o BD

		?>
		<br><br><br>
		<center>
		<button type="submit" class="btn btn-success" style="margin-top:30px; height:50px; width:120px; border-radius:50px" onclick="window.location.href='funcionarioIncluir.php'">Voltar</button>
		</center>
	</div>
	<!-- FIM PRINCIPAL -->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require '../models/footer.php'; ?>

</body>
</html>
