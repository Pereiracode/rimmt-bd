<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/estilo.css">
	<title>Projeto Login</title>
</head>
<body>
<?php
    session_start();
    session_destroy();

?>
	<div id="corpo-form">
		<h1>Entrar</h1>
		<form method="post" action="index1.php">
			<input type="email" placeholder="Usuario" name='email'>
			<input type="password" placeholder="Senha" name='senha'>
			<input type="submit" value="ACESSAR">
			<a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se</strong></a>
		</form>
	</div>
</body>
</html>
