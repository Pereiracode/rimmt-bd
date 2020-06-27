<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="css/estilo.css">
	
	<title>Projeto Login</title>
</head>
<body>
<div id="corpo-form-cad">
	<h1>Cadastre-se</h1>
	<form method="POST" action="_inserir_usuario.php">
		<input type="text" name="nome" placeholder="Nome Completo" maxlength="45">
		<input type="text" data-js="phone" name="celular" placeholder="Celular (xxx) xxxxx-xxxxx" maxlength="30">
		<input type="text" data-js="cpf" name="cpf"  placeholder="CPF (xxx.xxx.xxx-xx)">
		<input type="text"  name="Endereco" placeholder="Endereço" maxlength="100">
		<input type="email" name="email" placeholder="E-mail" maxlength="40">
		<input type="password" name="senha" id="txtSenha" placeholder="Senha" maxlength="20">
		<input type="password" name="confSenha" placeholder="Confirmar senha" oninput="validaSenha(this)"  >
		<input type="submit" value="CADASTRAR" class="entrar">
	</form>
	<a href="index.php">Já tem Cadastro? <strong>Faça login!</strong></a>
</div>



<script src="./js/script.js"></script>
</body>
</html>
