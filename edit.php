<?php
//conecta ao banco de dado
include('conexao.php');

$nome =  $_GET['nome'];
$qnt = $_GET['quantidade'];
$valor = $_GET['valor'];

//cadastra no banco
$sql = "UPDATE produto SET   quantidade = '$qnt', valor = '$valor',
WHERE nome = '$nome'";

if (mysqli_query($conexao, $sql)){
  echo "Arquivo enviado com sucesso!";
  header ('Location: index.php ');
}else{
  echo "Falha ao enviar arquivo.";

}


?>