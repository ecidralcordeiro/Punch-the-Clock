<!-------------------------------------------------------------------------------
Oficina Desenvolvimento Web
PUCPR

CONECTABD.PHP - deve ser incluído em todos os arquivos PHP que precisam de acesso à BD

Profa. Cristina V. P. B. Souza
Novembro/2021
---------------------------------------------------------------------------------->
<?php
global $servername ;
global $username;
global $password;
global $database;
global $logado;

$logado = false;

$servername = "localhost:3306";
$username = "user2";
$password = "pass";
$database = "punch_the_clock";

$mysqli = new mysqli($servername, $username, $password, $database);
    $mysqli->set_charset('utf8');

    if ($mysqli->connect_error):
        echo "Erro na conexao: " . $mysqli->connect_errno . $mysqli->connect_error;
    endif;
?>




