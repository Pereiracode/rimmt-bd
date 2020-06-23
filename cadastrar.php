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
		<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
		<input type="email" name="email" placeholder="Usuario" maxlength="40">
		<input type="password" name="senha" id="txtSenha" placeholder="Senha" maxlength="20">
		<input type="password" name="confSenha" placeholder="Confirmar senha" oninput="validaSenha(this)">
		<input type="submit" value="CADASTRAR" class="entrar">
	</form>
	<a href="index.php">Já tem Cadastro? <strong>Faça login!</strong></a>
</div>



<script>
	function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
}
</script>
</body>
</html>
