<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./css.css">
<link rel="stylesheet" href="../css/CssDebug.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="home.css">

<?php require '../conectaBD.php'; ?>
<body>
<?php require '../models/header.php'; ?>

    <br>
    <center>
    <div class="titulo">
        <h2>Espelho Ponto</h2>
    </div>
    </center>

    
    
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

        $pontos = "SELECT dataMarcacao, hora, (SELECT cargaHoraria FROM cargaHoraria), (SELECT nome FROM funcionario LIMIT 1) FROM pontos ORDER BY dataRegistro, hora;"; 

        if ($result = mysqli_query($conn, $pontos)) {
            echo "<div class='tabela'>";
            echo "<table class='table table-bordered' style='border:none transparent'>";
                echo "<thead>";
                    echo "<tr>";
                        echo "<th scope='col'>Data</th>";
                        echo "<th scope='col'>Marcação (Minutos)</th>";
                        echo "<th scope='col'>Data</th>";
                        echo "<th scope='col'>Marcação (Horas)</th>";
                        echo "<th scope='col'>Nome</th>";
                        echo "<th scope='col'>Carga Horaria</th>";
                    echo "</tr>";
                echo "</thead>";
       
            if (mysqli_num_rows($result) > 0) {
                
                // Apresenta cada linha da tabela
                while ($row = mysqli_fetch_assoc($result)) {
                    $dataN = explode('-', $row["dataMarcacao"]);
                    $ano = $dataN[0];
                    $mes = $dataN[1];
                    $dia = $dataN[2];
                    $nova_data = $dia . '/' . $mes . '/' . $ano;

                    $hora = $row["hora"];
                    $horas = floor($hora / 60);
                    $string1 = sprintf("%.0f", $horas);
                    $minutos = $hora % 60;
                    $string2 = sprintf("%.0f", $minutos);
                    
                    if(strlen($string1) == 1){
                        $string1 = "0".$string1;
                    }
                    if(strlen($string2) == 1){
                        $string2 = "0".$string2;
                    }

                    $NovaHora = $string1  . ":" . $string2;


                    echo "<tbody>";
                    echo "<th 'scope=row'>";
                        echo $nova_data;
                        echo "</th><td>";
                        echo $row["hora"];
                        echo "</td><td>";
                        echo  $nova_data;
                        echo "</td><td>";
                        echo $NovaHora;
                        echo "</td><td>";
                        echo $row["(SELECT nome FROM funcionario LIMIT 1)"];
                        echo "</td><td>";
                        echo $row["(SELECT cargaHoraria FROM cargaHoraria)"];
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


