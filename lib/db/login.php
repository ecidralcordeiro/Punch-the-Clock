<?php
//require '../conectaBD.php';


if(isset($_POST['nome']) && isset($_POST['senha']) ){

 $dbhost = 'localhost:3307';
  $dbuser = 'user2';
  $dbpass = 'pass';
  $db= 'punch_the_clock';



$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$db);
 	if ($mysqli -> connect_errno) {
// 	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
// 	  exit();
 	}else{


$nome = $_POST['nome'];
$senha = $_POST['senha'];

$usuario=[
	"nome"=>"",
	"senha"=>"",
];


 $sql = "SELECT * from funcionario where nome='$nome' and senha='$senha'" ;


if ($result = $mysqli -> query($sql)) {
  while ($row= $result->fetch_assoc()) {
  	$usuario['nome'] = $row['nome'];
	$usuario['senha'] = $row['senha'];
  }
}

   $result -> free_result();

print json_encode($usuario, JSON_UNESCAPED_UNICODE);

 }

   
}