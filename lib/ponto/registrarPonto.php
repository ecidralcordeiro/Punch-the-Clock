<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/Style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<script src="registrarPonto.js"></script>

<body onload="getDate(), getLocal()">

<?php require '../models/header.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

<?php require '../conectaBD.php'; ?>


<?php 
    $consulta = "SELECT * FROM Funcionario";  
    $con = $mysqli->query($consulta) or die($mysqli->error);
?> 

<div style="margin-top:50px;">

        <div >
            <main>
                <center>
                    <h1 class=>Registrar Ponto</h1>
                </center>
                <div id="imgpt">
                    <img src="../../Imagens/usu.png" id="imgpt"></img>
                </div> <br>
                <form id="formPonto" method="get" action="" onsubmit="return check(this.form)">
                    <div id="divPonto"> 
                        <table> 
                            <tr> 
                            <td class="idFuncionario">Identificação do funcionário:</td> 
                            </tr> 
                            <?php while($dado = $con->fetch_array()) { ?> 
                            <tr> 
                            <td name="idFuncionario" class="idFuncionario"><?php echo $dado['idFuncionario']; ?></td>
                            <input type="hidden" name="idFuncionarioi" value="<?php echo $dado["idFuncionario"]; ?>">
                            <input type="hidden" id="datai" name="datai" value="">
                            <input type="hidden" id="horai" name="horai" value="">
                            </tr>
                            <?php } ?> 
                        </table> 
                    </div> <br>

                    <div id="ponto2">
                        <h2 id="data" name="data"></h2>
                        <h2 id="hora" name="hora"></h2> <br>
                        <h2 name="local">Localização:</h2>
                        <img src="../../Imagens/local.jpg"></img> <br>
                    </div>

                    <div>
                        <h2 id="local"></h2>
                    </div>

                    <button type="submit" class="login100-form-btn" id=btponto>
                    Registrar
                    </button>
                </form>
            </main>
        </div>

        

        <?php
            error_reporting(E_ERROR | E_PARSE);

		    $data    = $_GET['datai'];
			$funcionarioId = $_GET['idFuncionarioi'];
			$hora   = $_GET['horai'];
			
			$conn = mysqli_connect($servername, $username, $password, $database);

			$sql = "INSERT INTO Pontos (dataMarcacao, dataRegistro, funcionarioId, hora) VALUES ('$data', '$data', '$funcionarioId', '$hora')";
            if (mysqli_query($conn, $sql)) {
                echo '<div style="text-align:center;"><a style="font-size:30px; display:block;color:green">Ponto Registrado!</a></div>';
            }
            mysqli_close($conn);
		?>

        
</div>
<?php require '../models/footer.php'; ?>

</body>