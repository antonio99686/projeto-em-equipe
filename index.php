<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashbord.css">
    <link rel="shortcut icon" href="icon/car.png">
    <title>MERCADO ESTOQUE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
<a class="navbar-brand"> ESTOQUE</a>
<?php
include("conexao.php");
$sql = "SELECT * FROM produto";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);

?>
    </div>

</nav>
<div class="perfil">
  
<h3>Dados</h3>

<div class="posisao">
  
 
 <?php
 
 

 
 //Lista os itens
 echo '<div class="table">
   <table>
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Nome</th>
       <th scope="col">Quantidade</th>
       <th scope="col">Valor</th>
      
 
     </tr>';
 
 while ($dados = mysqli_fetch_assoc($resultado)) {
       echo"<tr>";
       echo "<td>" .  $dados['id_produto']         .  "</td>";
       echo "<td>" .  $dados['nome']         .  "</td>";
       echo "<td>" .  $dados['quantidade']        .  "</td>";
       echo "<td>" .  $dados['valor']        .  "</td>";
      
       echo '</tr>';
       echo "<td><a href='formedit.php?" . "&id_produto=".$dados['id_produto'] . "&nome=".$dados['nome']."&quantidade=".$dados['quantidade']."&valor=".$dados['valor']."'>"."<img src='icon/edit.png' 'widht='20' height='20'"."</a>";
       echo "<td><a href='exclui.php?" . "&id_produto=".$dados['id_produto'] . "&nome=".$dados['nome']."&quantidade=".$dados['quantidade']."&valor=".$dados['valor']."'>"."<img src='icon/lixo.png' 'widht='20' height='20'"."</a>";
       
 
 }
 echo '</table>
 </div>';
 ?>
 
 
 
 
 
 </div>
</div>


<div class="barra">
    <h3>Opção</h3>
      Cadastrar  <a href="formcad.php">
      <img src="icon/cad.png" width="40px" height="50px"></a>
      <br>
      





</div>


</main>
</body>
</html>

