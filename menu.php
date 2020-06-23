<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  include 'conexao.php';
  session_start();

  $email = $_SESSION['email'];

  if(!isset($email)){
    header('Location: index.php');
  }

?>
    <div class="container" style="text-align:center; margin: 50px auto">
        <h3>Menu Principal</h3>
        
        <form action="index.php" method="post">
        <button class="btn btn-sm btn-danger" type="submit" ><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;<b>Sair</b></button>
        </form>
  </div>
    

    <div class="card text-center">
    <div class="card-header">
        Apple Iphone
    </div>
    <div class="card-body">
        <h5 class="card-title">Iphone X</h5>
        <p class="card-text">O Apple iPhone X é um dos smartphones iOS mais avançados e completos que existem em circulação..</p>
        <a href="#" class="btn btn-primary">Comprar</a>
    </div>
    </div>

    <div class="card text-center">
    <div class="card-header">
        Xiaomi Mi
    </div>
    <div class="card-body">
        <h5 class="card-title">Mi 9</h5>
        <p class="card-text">O Xiaomi MI 9 é, sem dúvida, um dos smartphones Android mais avançados e abrangentes disponíveis no mercado, graças ao seu rico equipamento e recursos multimídia avançados.</p>
        <a href="#" class="btn btn-primary">Comprar</a>
    </div>
    </div>
</body>
</html>