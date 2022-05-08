<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/Style.css">

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
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-users"style="padding-right: 10px;"></i>Funcionarios</a>
                                <ul class="dropdown-menu">
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/funcionario/funcionarioIncluir.php">Cadastrar</a></li>
                                    <li><a style="color:black;" class="dropdown-item" href="http://localhost/punch-the-clock/lib/funcionario/funcionarioListar.php">Gerenciar</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-solid fa-arrows-to-dot" style="padding-right: 10px;"></i>Ponto</a>
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
        <nav id="subHeader" class="navbar navbar-light bg-light" style="margin-top:25px; border-bottom:3px solid #7bd5dd">
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


<!-- Conteudo principal !-->
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="http://localhost/punch-the-clock/lib">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="../../imagens/Maionese.jpeg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Nome</h5>
            <p class="text-muted mb-1">Empresa: </p>
            <p class="text-muted mb-4">Cargo: </p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Excluir</button>
              <button type="button" class="btn btn-outline-primary ms-1">Editar</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">--</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">--</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">--</p>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nome completo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">--</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">exemplo@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Data nascimento</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">10/10/2000</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Celular</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(41) 9999-9999</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Endereço</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">--</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Lista de</span> Pontos
                </p>
                <p class="mb-1" style="font-size: .77rem;"></p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;"></p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;"></p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;"></p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;"></p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

 <!-- FIM PRINCIPAL -->
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