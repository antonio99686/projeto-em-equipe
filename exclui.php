<?php
include("conexao.php");

$id = $_GET['id_produto'];

$sql = "SELECT * FROM produto WHERE id_produto = $id";
$resultado = mysqli_query($conexao, $sql);
$lista = mysqli_fetch_assoc($resultado);


mysqli_query($conexao, $sql);


header('Location: index.php');