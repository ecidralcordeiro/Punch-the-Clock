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
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href="#" class="navbar-brand">
                    <img id="logo" src=".../Imagens/Logo_ptc.jpeg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justfiy-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="http://localhost/punch_the_clock/lib/" class="nav-item nav-link" id="home-menu"><i class="fa fa-fw fa-home" style="padding-right: 25px;"></i>Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-users"style="padding-right: 10px;"></i>Funcionarios</a>
                                <ul class="dropdown-menu">
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch_the_clock/lib/funcionario/funcionarioIncluir.php">Cadastrar</a></li>
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-users"style="padding-right: 10px;"></i>Ponto</a>
                                <ul class="dropdown-menu">
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch_the_clock/lib/funcionario/funcionarioIncluir.php">Cadastrar</a></li>
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-briefcase"style="padding-right: 10px;"></i>Cargos</a>
                                <ul class="dropdown-menu">
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Cadastrar</a></li>
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Gerenciar</a></li>
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



    <?php require '../conectaBD.php'; ?>

    <!-- Conteúdo Principal: deslocado para direita em 270 pixels quando a sidebar é visível -->
    <div class="w3-main w3-container" style="margin-left:270px;margin-top:117px;">

        <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
            <h1 class="w3-xxlarge">Atualização Cadastral de Funcionarios</h1>

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

                <!-- Acesso ao BD-->
                <?php		
				$id=$_GET['id'];

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
				$sql = "SELECT idFuncionario, nome, telefone, dataNascimento, email FROM Funcionario WHERE idFuncionario = $id";
				
				//Inicio DIV form
				echo "<div class='w3-responsive w3-card-4'>"; 
				if ($result = mysqli_query($conn, $sql)) {
						if (mysqli_num_rows($result) > 0) {
						// Apresenta cada linha da tabela
							while ($row = mysqli_fetch_assoc($result)) {
				?>
                <div class="w3-container w3-theme">
                    <h2>Altere os dados do Funcionario de id. = [<?php echo $row['idFuncionario']; ?>]</h2>
                </div>
                <form class="w3-container" action="funcionarioAtualizar_exe.php" method="post"
                    onsubmit="return check(this.form)">
                    <input type="hidden" id="Id" name="Id" value="<?php echo $row['idFuncionario']; ?>">
                    <p>
                        <label class="w3-text-deep-orange"><b>Nome</b></label>
                        <input class="w3-input w3-border w3-sand" name="nome" type="text"
                            pattern="[a-zA-Z\u00C0-\u00FF ]{10,100}$" value="<?php echo $row['nome']; ?>" required>
                    </p>
                    <p>
                        <label class="w3-text-deep-orange"><b>Celular</b></label>
                        <input class="w3-input w3-border w3-sand " name="telefone" type="text" title="(11)1111-1111."
                            value="<?php echo $row['telefone']; ?>" required>
                    </p>
                    <p>
                        <label class="w3-text-deep-orange"><b>Data de Nascimento</b></label>
                        <input class="w3-input w3-border w3-sand" name="dataNascimento" type="date"
                            pattern="((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/((19|20)[0-9][0-9])"
                            title="Formato: dd/mm/aaaa." value="<?php echo $row['dataNascimento']; ?>">
                    </p>
                    <p>
                        <label class="w3-text-deep-orange"><b>Email</b></label>
                        <input class="w3-input w3-border w3-sand" name="email" type="text"
                            value="<?php echo $row['email']; ?>" required>
                    </p>
                    <p>
                        <label class="w3-text-deep-orange"><b>NOVA Senha</b></label>
                        <input class="w3-input w3-border w3-sand" name="senha" type="password"
                            title="Deve conter ao menos um número, uma letra maiúscula e minúscula, um caracter especial, com 6 a 8 caracteres"
                            required>
                    </p>
                    <p>
                        <label class="w3-text-deep-orange"><b>Confirma NOVA Senha</b></label>
                        <input class="w3-input w3-border w3-sand" name="Senha2" type="password"
                            title="Deve conter ao menos um número, uma letra maiúscula e minúscula, um caracter especial, com 6 a 8 caracteres"
                            required>
                    </p>
                    <p>
                        <input type="submit" value="Alterar" class="w3-btn w3-red">
                        <input type="button" value="Cancelar" class="w3-btn w3-theme"
                            onclick="window.location.href='funcionarioListar.php'">
                    </p>
                </form>
                <?php 
							}
						}
				}
				else {
					echo "Erro executando UPDATE: " . mysqli_error($conn);
				}
				echo "</div>"; //Fim DIV form
				mysqli_close($conn); //Encerra conexao com o BD

			?>

            </div>
            </p>
        </div>



        <!-- FIM PRINCIPAL -->
    </div>
    <!-- Inclui RODAPE.PHP  -->

</body>

</html>