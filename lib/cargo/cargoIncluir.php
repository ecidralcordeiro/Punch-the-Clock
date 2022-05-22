<html lang="pt-BR">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Punch The Clock</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/3717b64e79.js" crossorigin="anonymous"></script>

<body>
<?php require '../models/header.php'; ?>
<?php require '../conectaBD.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

   
    <h1>Cadastro de Cargo</h1>                
    
    <div class="">
        <div class="">
   
          <?php

            // Cria conexão
            $conn = mysqli_connect($servername, $username, $password, $database);
            
            // Verifica conexão 
            if (!$conn) {
                echo "</table>";
                echo "</div>";
                die("Falha na conexão com o Banco de Dados: " . mysqli_connect_error());
            }
            
            // Configura para trabalhar com caracteres acentuados do português
            mysqli_query($conn,"SET NAMES 'utf8'");
            mysqli_query($conn,'SET character_set_connection=utf8');
            mysqli_query($conn,'SET character_set_client=utf8');
            mysqli_query($conn,'SET character_set_results=utf8');

            // Faz Select na Base de Dados
            $sql = "SELECT idCargo, descricao FROM cargo";
            echo "<div>";
            if ($result = mysqli_query($conn, $sql)) {
                echo "	<tr>";
                echo "	  <th>Codigo</th>";
                echo "	  <th>descrição</th>";
                echo "	</tr>";
                echo "	<br>";

                // $sqlCargo = "SELECT descricao from Cargo where Id = cargoId";
                // $result
                if (mysqli_num_rows($result) > 0) {
                    
                    // Apresenta cada linha da tabela
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cod = $row["idCargo"];
                        echo "<tr>";
                        echo "<td>";
                        echo $cod;
                        echo "</td><td>";
                        echo "<tr>";
                        echo "<td>";
                        echo $row["descricao"];
                        echo "</td><td>";

                        
                        //Atualizar e Excluir registro de prof
        ?>

        <a href='../funcionario/funcionarioAtualizar.php?id=<?php echo $cod; ?>'><img src='../../imagens/Edit.png'
                title='Editar Funcionario' width='32'></a>
        </td>
        <td>
            <a href='../funcionario/funcionarioExcluir.php?id=<?php echo $cod; ?>'><img src='../../imagens/Delete.png'
                    title='Excluir Funcionario' width='32'></a><br>
        </td>
        </tr>
        <?php
                    }
                }
                    echo "</table>";
                    echo "</div>";
            } else {
                echo "Erro executando SELECT: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        ?>
    </div>
</div>
        <br><br><br><br><br><br><br><br>
        <?php require '../models/footer.php'; ?>

</body>
</html>