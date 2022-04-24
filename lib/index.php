<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>

<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">



<body>
    <nav class="navbar shadow navbar-dark bg-success fixed-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="http://localhost/punch_the_clock/#">Punch The Clock</a>

            <a class="navbar-brand" href="http://localhost/punch_the_clock/#"><img src="https://thumbs.dreamstime.com/z/%C3%ADcone-do-clique-da-m%C3%A3o-119831352.jpg" alt=""  width="32" height="32"></a>
            

        </div>
    </nav>

    <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1"
        id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">

        <a href="http://localhost/punch_the_clock/#"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="imagens/Logo_ptc.jpeg" alt="" width="50" height="50" class="rounded-circle me-4">
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
                    <button><a href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Gerenciar Funcionarios</a> </button> <br>
                    <button><a href="http://localhost/punch_the_clock/lib/funcionario/funcionarioIncluir.php">Cadastrar Funcionario</a></button>
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
                    <button><a href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Gerenciar Cargo</a> </button> <br>
                    <button><a href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Cadastrar Cargo</a></button>
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
                    <button><a href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Relatorio Ponto</a> </button> <br>
                    <button><a href="http://localhost/punch_the_clock/lib/funcionario/funcionarioListar.php">Bater Ponto</a></button>
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


    <!-- Conteúdo PRINCIPAL -->
    <div style="margin-left:270px;margin-top:117px;">

        <div >
            <h1 class=>Punch the Clock</h1>

            <img src="https://img.freepik.com/vetores-gratis/fundo-de-formas-abstratas-brancas_79603-1362.jpg?w=2000"
                class="img-fluid" alt="" width="1500" height="500">




            <!-- FIM PRINCIPAL -->
        </div>


</body>

</html>