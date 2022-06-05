<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/Style.css">
<link rel="stylesheet" href="espelhoPonto.css">

<body>
<?php require '../models/header.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

<!-- Conteúdo Principal -->
<br>
    <br>
    <center>
        <h1>Cadastro de Funcionário</h1>                
        <br>
        <br>
    <center>
            
        <div id=caixa style=" width:1024px; height:430px; background-color:rgb(238, 238, 238); border:1px solid black; border-radius:15px; position:relative padding-bottom:48%;">
            <form class="row g-3" action="funcionarioIncluir_exe.php" method="post" onsubmit="return check(this.form)">
                <input type="hidden" id="acaoForm" name="acaoForm" value="Contratar">
                <div class="col-md-6">
                    <label for="inputNome" class="form-label"style="margin-right:500px">Nome</label>
                    <input type="text" class="form-control" id="inputNome" name="nome">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label" style="margin-right:500px" >Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label" style="margin-right:500px">Senha</label>
                    <input type="password" class="form-control" id="inputPassword" name="senha">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label" style="margin-right:500px">Confirmar_senha</label>
                    <input type="password" class="form-control" id="inputPassword" name="senha2">
                </div>
                <div class="col-md-6">
                    <label for="inputCelular" class="form-label" style="margin-right:500px">Celular</label>
                    <input type="text" class="form-control" id="inputAddress" name="telefone">
                </div>
                <div class="col-md-6">
                    <label for="inputCpf" class="form-label" style="margin-right:500px" >CPF</label>
                    <input type="text" class="form-control" id="inputCpf" name="CPF">
                </div>
                
                <div class="col-md-6">
                    <label for="inputCity" class="form-label" style="margin-right:350px" >Data de Nascimento</label>
                    <input type="date" class="form-control" id="inputDataNascimento" name="dataNascimento">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label" style="margin-right:400px" >Data de Inicio</label>
                    <input type="date" class="form-control" id="inputDataNascimento" name="dataDeInicio">
                </div>
                <div class="col-md-4">
                    <label for="inputCargo" class="form-label" style="margin-right:500px">Cargo</label>
                    <select id="inputCargo" class="form-select" style="width:498px" name="cargoId">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div> 
                <div class="col-md-4">
                    <label for="inputCargaHoraria" class="form-label" style="margin-left:100px">CargaHoraria</label>
                    <select id="inputCargaHoraria" class="form-select" style="width:498px; margin-left:170px" name="cargaHorariaId">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" style="margin-top:30px" onclick="window.location.href='funcionarioIncluir_exe.php'">Registrar</button>
                </div>
            </form>
        </div>
        
        <br><br><br><br><br><br><br><br>

        <?php require '../models/footer.php'; ?>

</body>
</html>
