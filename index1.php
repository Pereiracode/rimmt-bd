<?php
include 'conexao.php';
include 'script/password.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select email, senha from usuario where email = '$email'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

if($total == 0){
    header('Location: index.php');
}

while($array = mysqli_fetch_array($buscar)){
    $senhauser = $array['senha'];

    $senhacodificada = sha1($senha);

if($total > 0){
    if($senhacodificada == $senhauser){
        session_start();
        $_SESSION['email'] = $email;
        header('Location: menu.php');
    }
    else{

        header('Location: erro.php');
    }
}
else{ 
    
    header('Location: erro.php');

}
}
?>