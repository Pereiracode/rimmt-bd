<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuario (nome, telefone, email, senha) values ('$nomeusuario', '$telefone', '$email', sha1('$senha'))";
$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container" style="width : 500px; margin-top: 20px">
<center><h4>Usuário Adicionado com sucesso !</h4></center>
<div style="padding-top:20px">
<center><a href="cadastrar.php" role="button" class="btn btn-sm btn-warning">Voltar</a></center>
</div>
</div>
