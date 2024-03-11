<?php
//conecta ao banco de dado
include('conexao.php');

$usuario =  $_GET['nome'];
$senha = $_GET['senha'];
$email = $_GET['email'];
$id =  $_GET['id_usuario'];


//cadastra no banco
$sql = "UPDATE usuario SET  = '$email', senha = '$senha' 
WHERE nome ='$usuario'";

if (mysqli_query($conexao, $sql)){
  echo "Arquivo enviado com sucesso!";
  header ('Location: index.php ');
}else{
  echo "Falha ao enviar arquivo.";

}


?>