<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/CssDebug.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>

<body>
<?php require '../models/header.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


<!-- Conteúdo Principal -->
<br>
    <br>
    <center>
        <h1>Cadastro de Carga Horaria</h1>                
        <br>
        <br>
    <center>
        <div id=caixa style=" width:1024px; height:430px; background-color:rgb(238, 238, 238); border:1px solid black; border-radius:15px; position:relative padding-bottom:48%;">
            <form class="row g-3" action="cargaHorariaIncluir_exe.php" method="post" onsubmit="return check(this.form)">
                <input type="hidden" id="acaoForm" name="acaoForm" value="Contratar">
                <div class="col-md-6">
                    <label for="inputNome" class="form-label"style="margin-right:500px">Código</label>
                    <input type="number" class="form-control" id="inputEmail4" name="idCargaHoraria" required min="1">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label" style="margin-right:500px" >Tipo </label>
                    <select id="inputCargo" class="form-select" style="width:498px" name="tipo" required>
                        <option>Normal</option>
                        <option>Diaria</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label" style="margin-right:500px">Horas</label>
                    <input type="time" class="form-control" id="cargaHoraria" name="cargaHoraria" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label" style="margin-right:500px">Tempo</label>
                    <select id="inputCargo" class="form-select" style="width:498px" name="noturno" required>
                        <option>Diurno</option>
                        <option>Noturno</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputCelular" class="form-label" style="margin-right:330px">Limite Marcações Por dia</label>
                    <input type="number" class="form-control" id="inputAddress" name="quantidadeMarcacoes" required min="1">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" style="margin-top:30px" onclick="window.location.href='cargaHorariaIncluir_exe.php'">Registrar</button>
                </div>
            </form>
        </div>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br>

        <?php require '../models/footer.php'; ?>

</body>
</html>
