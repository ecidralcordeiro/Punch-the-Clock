<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css.css">
<link rel="stylesheet" href="../css/CssDebug.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>

<body>
<?php require '../models/header.php'; ?>
<?php require '../conectaBD.php'; ?>
<br><br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

   <center>
    <h1>Cadastro de Cargo</h1>   
    <br>
    <div class="">
            <?php
                // Cria conexão
                $conn = mysqli_connect($servername, $username, $password, $database);
                
                // Verifica conexão 
                if (!$conn) {
                    die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
                }
                
                // Configura para trabalhar com caracteres acentuados do português
                mysqli_query($conn,"SET NAMES 'utf8'");
                mysqli_query($conn,'SET character_set_connection=utf8');
                mysqli_query($conn,'SET character_set_client=utf8');
                mysqli_query($conn,'SET character_set_results=utf8');

                // Faz Select na Base de Dados
                $sql = "SELECT idCargo, descricao FROM cargo";

                if ($result = mysqli_query($conn, $sql)) {
                
                    // $sqlCargo = "SELECT descricao from Cargo where Id = cargoId";
                    if (mysqli_num_rows($result) > 0) {

                        echo "<table class=table style='margin-left: auto;
                        margin-right: auto; 
                        border: 1px solid black;
                        width: 1200;
                        background-color: rgba(72, 220, 208, 0.739);
                        margin-top: 30px;'>";
                            echo "<thead>";
                            echo "<tr>";
                                echo "<th scope=col>Código</th>";
                                echo "<th scope=col>Descrição</th>";
                                echo "<th scope=col>Editar</th>";
                                echo "<th scope=col>Deletar</th>";
                            echo "</tr>";
                        echo "</thead>";

                        // Apresenta cada linha da tabela
                        while ($row = mysqli_fetch_assoc($result)) {
                            $cod = $row["idCargo"];
                                 
                                echo "<tbody>";
                                    echo "<tr>";
                                        echo "<th scope=row>";
                                        echo $cod;
                                        echo "</th>";
                                        echo "<td>";
                                        echo $row["descricao"];
                                        echo "</td>";
                                                               
?>
                            <td>
                            <a href='../cargo/cargoExcluir.php?id=<?php echo $cod; ?>'><img src='../../imagens/Edit.png'
                                    title='Editar Funcionario' width='22'></a>
                            </td>
                            <td>
                                <a href='../cargo/cargoExcluir.php?id=<?php echo $cod; ?>'><img src='../../imagens/Delete.png'
                                        title='Excluir Funcionario' width='22'></a><br>
                            </td>
                            </tr>
                            </thead>
                <?php
                    }
                }
                echo "</table>";
                echo "</tbody>";

                echo "</div>";
            } else {
                echo "Erro executando SELECT: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        ?>
    <?php require '../models/footer.php'; ?>

</body>
</html>