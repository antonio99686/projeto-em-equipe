<?php
include("conexao.php");

$id = $_GET['id_produto'];

$sql = "SELECT * FROM produto WHERE id_produto=$id";
$resultado = mysqli_query($conexao, $sql);
$escolhas = mysqli_fetch_assoc($resultado);

$sql = "DELETE FROM produto WHERE id_produto = $id";
mysqli_query($conexao, $sql);


header('Location: index.php');