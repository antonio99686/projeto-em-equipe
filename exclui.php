<?php
include("conexao.php");

$id = $_GET['id_produto'];




$sql = "SELECT * FROM usuario WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$lista = mysqli_fetch_assoc($resultado);

unlink($diretorio . $lista['imagem']);
$sql = "DELETE FROM usuario WHERE id = $id";
mysqli_query($conexao, $sql);


header('Location: listar.php');