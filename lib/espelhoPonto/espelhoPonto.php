<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="espelhoPonto.css">

<?php require '../conectaBD.php'; ?>

<body>
    <div class="titulo">
        <h2>Espelho Ponto</h2>
    </div>
   
    <div class="botoes">
        <div>
            <button>Data inicial</button>
        </div>
        
        <div>
            <button>Data Final</button>
        </div>

        <div>
            <button>consultar</button>
        </div>
    </div>
    

    <div class="tabela">
            <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Entradas</th>
            <th scope="col">Saidas</th>
            <th scope="col">Carga Horaria</th>
            <th scope="col">Trabalhada</th>
            <th scope="col">Crédito</th>
            <th scope="col">Débito</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>-
            <td>@mdo</td>-
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
    </div>

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

        $sql = "SELECT dataRegistro, hora FROM pontos";
        
        if ($result = mysqli_query($conn, $sql)) {
            echo "<div class='tabela'>";
            echo "<table class='table table-bordered'>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th scope='col'>Data</th>";
                        echo "<th scope='col'>Entradas</th>";
                        echo "<th scope='col'>Saidas</th>";
                        echo "<th scope='col'>Carga Horaria</th>";
                        echo "<th scope='col'>Trabalhada</th>";
                        echo "<th scope='col'>Crédito</th>";
                        echo "<th scope='col'>Débito</th>";
                        echo "<th scope='col'>editar</th>";
                        echo "<th scope='col'>excluir</th>";
                    echo "</tr>";
                echo "</thead>";
            // $sqlCargo = "SELECT descricao from Cargo where Id = cargoId";
            // $result
            if (mysqli_num_rows($result) > 0) {
                
                // Apresenta cada linha da tabela
                while ($row = mysqli_fetch_assoc($result)) {
                    $dataN = explode('-', $row["dataRegistro"]);
                    $ano = $dataN[0];
                    $mes = $dataN[1];
                    $dia = $dataN[2];
                    $nova_data = $dia . '/' . $mes . '/' . $ano;

                    echo "<tbody>";
                    echo "<th 'scope=row'>";
                        echo $nova_data;
                        echo "</th><td>";
                        echo $row["hora"];
                        echo "</td><td>";
                        echo  $nova_data;
                        echo "</td><td>";
                       
                        
                        echo "</td><td>";
                        
                        
                        echo "</td><td>";
                      
                        
                        echo "</td><td>";
                      
                        
                        echo "</td><td>";
                        
                        echo "</td><td>";

                        echo "</td><td>";
                        echo "</td><td>";
                        echo "</td><td>";

                        echo "</td><td>";

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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script> 
</body>


