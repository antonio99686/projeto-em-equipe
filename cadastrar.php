<?php

//conecta ao banco de dado
include('conexao.php');


//dados do formulario
$nome =  $_GET['nome'];
$qtd = $_GET['qtd'];
$valor = $_GET['valor'];



//cadastramento no banco
$sql = "INSERT INTO produto(
  nome,
     quantidade,
     valor)
 VALUES 
 ('$nome','$qtd','$valor')";

// Executar o comando SQL
if (mysqli_query($conexao, $sql)){
        echo "pessoa cadastrada com sucesso!";
        header('Location: index.php');
}else{
        echo "Falha ao cadastrar pessoa.";
}



 ?>
