<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/CssDebug.css">


<body>
<?php require '../models/header.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    
    <?php require '../conectaBD.php'; ?>

    <?php
                    $conn = mysqli_connect($servername, $username, $password, $database);
                    
                    if (!$conn) {
                        echo "</table>";
                        echo "</div>";
                        die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
                    }
                    
                   
                    mysqli_query($conn,"SET NAMES 'utf8'");
                    mysqli_query($conn,'SET character_set_connection=utf8');
                    mysqli_query($conn,'SET character_set_client=utf8');
                    mysqli_query($conn,'SET character_set_results=utf8');
        ?>
    
    </script>
            
            <center>
            <br><br><br>
            <h1>Punch the Clock</h1>
            <h2>Home</h2>
            </center>
    <!-- Conteúdo PRINCIPAL -->
        <div>
            <main style="height:680px">
            <br><br>
                <center>
                <div class = caixa style="box-sizing: border-box;position: absolute;width: 1405px;height: 250px;top:300px;left: 350px;background: #FFFFFF;border: 1px solid #C7C7C7;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                <table class="table">
                            <tr>
                            <th scope="col">06/Jun/Segunda</th>
                            <th scope="col">07/Jun/Terça</th>
                            <th scope="col">08/Jun/Quarta</th>
                            <th scope="col">09/Jun/Quinta</th>
                            <th scope="col">10/Jun/Sexta</th>
                            <th scope="col">11/Jun/Sabádo</th>
                            <th scope="col">12/Jun/Domingo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $consulta = "SELECT hora FROM pontos WHERE dataRegistro = '2022-06-06'";
                                $result = $conn->query($consulta);
                                while($dados = mysqli_fetch_assoc($result)){
                                echo"<tr>";
                                    echo"<td>".$dados['hora']."</td>";
                                    echo"<td></td>";
                                    echo"<td></td>";
                                    echo"<td></td>";
                                    echo"<td></td>";
                                    echo"<td></td>";
                                    echo"<td></td>";
                                echo"</tr>";
                                } 
                            ?>

                        </tbody>
                        </table>
                    </div>
            </main>
        </div>


        <!-- FIM PRINCIPAL -->
        <?php require '../models/footer.php'; ?>

</body>

</html>