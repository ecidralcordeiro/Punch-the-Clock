<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/CssDebug.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>

<body>
<?php require '../conectaBD.php'; ?>


<body>
    <?php require '../models/header.php'; ?>
    <br><br>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



        <?php require '../conectaBD.php' ?>

        <div class="">
            <h1>Relação de Funcionarios</h1>
       
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

                    $sql = "SELECT idFuncionario, nome, telefone,dataNascimento, estadoCivil,email, cargoId, empresaId FROM Funcionario";
                 
                    if ($result = mysqli_query($conn, $sql)) {
                        echo "<table class='table table-bordered'>";
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th scope='col'>Código</th>";
                                    echo "<th scope='col'>Nome</th>";
                                    echo "<th scope='col'>Data Nascimento</th>";
                                    echo "<th scope='col'>email</th>";
                                    echo "<th scope='col'>cargo</th>";
                                    echo "<th scope='col'>celular</th>";
                                    echo "<th scope='col'>empresa</th>";
                                    echo "<th scope='col'>editar</th>";
                                    echo "<th scope='col'>excluir</th>";
                                echo "</tr>";
                            echo "</thead>";
                        // $sqlCargo = "SELECT descricao from Cargo where Id = cargoId";
                        // $result
                        if (mysqli_num_rows($result) > 0) {
                            
                            // Apresenta cada linha da tabela
                            while ($row = mysqli_fetch_assoc($result)) {
                                $dataN = explode('-', $row["dataNascimento"]);
                                $ano = $dataN[0];
                                $mes = $dataN[1];
                                $dia = $dataN[2];
                                $cod = $row["idFuncionario"];
                                $nova_data = $dia . '/' . $mes . '/' . $ano;

                                echo "<tbody>";
                                echo "<th 'scope=row'>";
                                    echo $cod;
                                    echo "</th><td>";
                                    echo $row["nome"];
                                    echo "</td><td>";
                                    echo  $nova_data;
                                    echo "</td><td>";
                                    echo $row["email"];
                                    echo "</td><td>";
                                    echo $row["cargoId"];
                                    echo "</td><td>";
                                    echo $row["telefone"];
                                    echo "</td><td>";
                                    echo $row["empresaId"];
                                    echo "</td><td>";
                ?>

                <a href='../funcionario/funcionarioAtualizar.php?id=<?php echo $cod; ?>'><img src='../../imagens/Edit.png'
                        title='Editar Funcionario' width='22'></a>
                </td>
                <td>
                    <a href='../funcionario/funcionarioExcluir.php?id=<?php echo $cod; ?>'><img src='../../imagens/Delete.png'
                            title='Excluir Funcionario' width='22'></a>
                </td>
                <?php
                            }
                        }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</div>";
                    } else {
                        echo "Erro executando SELECT: " . mysqli_error($conn);
                    }

                    mysqli_close($conn);

                ?>
      
        </div>           
        
</body>
<br><br><br><br><br><br><br><br>

</html>