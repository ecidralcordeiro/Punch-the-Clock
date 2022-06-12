<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Punch The Clock</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../../images/icons/1"/>
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<?php include '../conectaBD.php'; 
session_start(); 

if (@$_REQUEST['botao'] == "entrar") {

    @$nome = $_POST['nome'];
    @$senha = md5 ($_POST['senha']);

    $query = " SELECT * FROM funcionario WHERE login = '$nome' AND senha = '$senha' ";
    $result = mysqli_query($con, $query);

    while ($coluna = mysqli_fetch_array($result)) {

        $_SESSION["idFuncionario"] = $coluna["idFuncionario"];
        $_SESSION["nome"] = $coluna["nome"];
        /*$_SESSION["UsuarioNivel"] = $coluna["nivel"];*/
        header("Location: menu.php");
        exit;

    }
}

?>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Logue-se para continuar
					</span>
					
					<form id="login">
						<div class="wrap-input100 validate-input" data-validate = "Insira um Email válido: ex@abc.xyz">
							<input class="input100" type="text" name="nome" value="nome" id="nome">
							<span class="focus-input100"></span>
							<span class="label-input100">Email</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Insira uma senha">
							<input class="input100" type="password" name="senha" value="senha" id="senha" >
							<span class="focus-input100"></span>
							<span class="label-input100">Senha</span>
						</div>
						<div class="container-login100-form-btn">
							<input type="submit" name="entrar" value="entrar" class="login100-form-btn">
						</div>
					</form>	
				</div>
				<div class="login100-more" style="background-image: url('../../imagens/2.svg');">
				</div>
			</div>
		</div>
	</div>
	



<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>