<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">



<body>
    <nav class="navbar shadow navbar-dark bg-success fixed-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="../index.php">Punch The Clock</a>

            <a class="navbar-brand" href="../index.php"><img src="https://thumbs.dreamstime.com/z/%C3%ADcone-do-clique-da-m%C3%A3o-119831352.jpg" alt=""  width="32" height="32"></a>
            

        </div>
    </nav>

    <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1"
        id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">

        <a href="http://localhost/punch_the_clock/#"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="../../imagens/Logo_ptc.jpeg" alt="" width="50" height="50" class="rounded-circle me-4">
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Funcionario
                </button>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <button><a href="http://localhost/punch_the_clock/funcionario/funcionarioListar.php">Gerenciar Funcionarios</a> </button> <br>
                    <button><a href="http://localhost/punch_the_clock/funcionario/funcionarioIncluir.php">Cadastrar Funcionariooooooooo</a></button>
                    </div>
                </div>
            </li>

            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Cargo
            </button>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <button><a href="http://localhost/punch_the_clock/funcionario/funcionarioListar.php">Gerenciar Cargo</a> </button> <br>
                    <button><a href="http://localhost/punch_the_clock/funcionarioListar.php">Cadastrar Cargo</a></button>
                    </div>
            </div>
            <li>
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Ponto
                </button>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <button><a href="http://localhost/punch_the_clock/funcionarioListar.php">Relatorio Ponto</a> </button> <br>
                    <button><a href="http://localhost/punch_the_clock/funcionarioListar.php">Bater Ponto</a></button>
                    </div>
                </div>
            </li>

        </ul>
        <hr>
        <div class="dropdown">
            <a href="http://localhost/punch_the_clock/#"
                class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>

    </div>



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
