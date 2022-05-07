<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/Style.css">

    <body>
    <header>
        <div class = "container" id= "nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="#" class="navbar-brand">
                    <img id="logo" src=".../imagens/Logo_ptc.jpeg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justfiy-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="http://localhost/punch-the-clock/lib/"class="nav-item nav-link" id="home-menu"><i class="fa fa-fw fa-home" style="padding-right: 25px;"></i>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-users"style="padding-right: 10px;"></i>Funcionarios</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


<!-- Conteúdo Principal -->
<div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">
    <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1 class="w3-xlarge">Cadastro de Funcionairo</h1>

        <p class="w3-large">
            <div class="w3-code cssHigh notranslate">
                <!-- Acesso em:-->
                <?php

                date_default_timezone_set("America/Sao_Paulo");
                $data = date("d/m/Y H:i:s", time());
                echo "<p class='w3-small' > ";
                echo "Acesso em: ";
                echo $data;
                echo "</p> "
                ?>
                <div class="w3-responsive w3-card-4">
                    <div class="w3-container w3-theme">
                        <h2>Informe dados novo funcionario</h2>
                    </div>
                    <form class="w3-container" action="funcionarioIncluir_exe.php" method="post" onsubmit="return check(this.form)">
						<input type="hidden" id="acaoForm" name="acaoForm" value="Contratar">
						<p>
						<label class="w3-text-deep-purple"><b>Nome</b></label>
						<input class="w3-input w3-border w3-light-grey" name="nome" type="text" pattern="[a-zA-Z\u00C0-\u00FF ]{10,100}$"
							    required></p>
						<p>
						<label class="w3-text-deep-purple"><b>CPF</b></label>
						<input class="w3-input w3-border w3-light-grey " name="CPF" type="text"
							   required></p>
						<p>
						<label class="w3-text-deep-purple"><b>Data Nascimento</b></label>
						<input class="w3-input w3-border w3-light-grey" name="dataNascimento" type="date"
							   pattern="((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/((19|20)[0-9][0-9])"
							   ></p>
						<p>
						<label class="w3-text-deep-purple"><b>Celular</b></label>
						<input class="w3-input w3-border w3-light-grey" name="telefone" type="text"
							    required></p>
						<p>
						<p>
						<label class="w3-text-deep-purple"><b>Empresa</b></label>
						<input class="w3-input w3-border w3-light-grey" name="empresaId" type="text"
							    required></p>
						<p>
						<p>
						<label class="w3-text-deep-purple"><b>Cargo</b></label>
						<input class="w3-input w3-border w3-light-grey" name="cargoId" type="text"
							    required></p>
						<p>
						<p>
						<label class="w3-text-deep-purple"><b>email</b></label>
						<input class="w3-input w3-border w3-light-grey" name="email" type="text"
							    required></p>
						<p>
						<label class="w3-text-deep-purple"><b>Senha</b></label>
						<input class="w3-input w3-border w3-light-grey" name="senha" type="password"
							   required></p>
						<p>
						<label class="w3-text-deep-purple"><b>Confirma Senha</b></label>
						<input class="w3-input w3-border w3-light-grey" name="senha2" type="password"
							    required> </p> 
						<p>
						<input type="submit" value="Registrar" class="w3-btn w3-theme" >
						<input type="button" value="Cancelar" class="w3-btn w3-theme" onclick="window.location.href='.'"></p>
					</form>
				</div>

			</div>
		</p>
	</div>


	
</body>
</html>
