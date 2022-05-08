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
<link rel="stylesheet" href="../css/Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>


<body>
<header>
        <div class = "container" id= "nav-container">
            <nav class="navbar navbar-expand-lg fixed-top bg-dark">
                <a href="http://localhost/punch_the_clock/lib/login/login.php" class="navbar-brand">
                    <img id="logo" src="../../imagens/Logo_ptc.jpeg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justfiy-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-item nav-link" href="http://localhost/punch-the-clock/lib"id="home-menu"><i class="fa fa-fw fa-home" style="padding-right: 25px;"></i>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-arrows-to-dot" style="padding-right: 10px;"></i>Funcionarios</a>
                                <ul class="dropdown-menu">
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/funcionario/funcionarioIncluir.php">Cadastrar</a></li>
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/funcionario/funcionarioListar.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-users"style="padding-right: 10px;"></i>Ponto</a>
                                <ul class="dropdown-menu">
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/funcionario/funcionarioIncluir.php">Cadastrar</a></li>
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/ponto/registrarPonto.php">Registrar</a></li>
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/funcionario/funcionarioListar.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-briefcase"style="padding-right: 10px;"></i>Cargos</a>
                                <ul class="dropdown-menu">
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/funcionario/funcionarioListar.php">Cadastrar</a></li>
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/funcionario/funcionarioListar.php">Gerenciar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>   
                </div>
            </nav> 
        </div>
    </header>
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
            <h1 class="w3-xxlarge">Exclusão de Funcionario</h1>

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
				
		// Cria conexão
		$conn = mysqli_connect($servername, $username, $password, $database);

		// ID do registro a ser excluído
		$id = $_POST['Id'];

		// Verifica conexão
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// Faz DELETE na Base de Dados
		$sql = "DELETE FROM Funcionario WHERE idFuncionario = $id";

		echo "<div class='w3-responsive w3-card-4'>";
		if ($result = mysqli_query($conn, $sql)) {
				echo "Um registro excluído!";
		} else {
			echo "Erro executando DELETE: " . mysqli_error($conn);
		}
        echo "</div>";
		mysqli_close($conn);  //Encerra conexao com o BD

	?>
            </div>
        </div>


        

        <!-- FIM PRINCIPAL -->
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="bg-dark text-center text-white form-white" style="border-top:3px solid #7bd5dd">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/ecidralcordeiro/Punch-the-Clock" role="button"><i class="fab fa-github"></i></a>
            </section>
            <form action="">
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white">Punch The Clock</a>
        </div>
        <!-- Copyright -->
</footer>
</body>

</html>