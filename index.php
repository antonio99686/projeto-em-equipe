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
    <link rel="shortcut icon" href="img/logo.png">
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
 
 
 while ($dados = mysqli_fetch_assoc($resultado)) {?>
       
    <table class="ui selectable inverted table">
    <thead>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th class="right aligned">QUANTIDADE</th>
        <th class="right aligned">VALOR</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Aprovado</td>
        <td class="right aligned">None</td>
      </tr>
      <tr>
        <td>Jamie</td>
        <td>Aprovado</td>
        <td class="right aligned">Requer chamada</td>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Denied</td>
        <td class="right aligned">None</td>
      </tr>
    </tbody>
  </table>
  <?php
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
      <img src="icon/cad.png" width="95px" height="100px"></a>
      <br>
      





</div>


</main>
</body>
</html>

