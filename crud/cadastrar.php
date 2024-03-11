<?php
//conecta ao banco de dado
include('conexao.php');


$nome= $_GET['nome'];
$qtd = $_GET['quantidade'];
$valor = $_GET['valor'];


$sql = "INSERT INTO produto ( nome, quantidade, valor) 
VALUES ('$nome','$qtd','$valor')";


if (mysqli_query($conexao, $sql)){
    echo "pessoa cadastrada com sucesso!";
    header('Location: index.php');
}else{
    echo "Falha ao cadastrar pessoa.";
}


?>