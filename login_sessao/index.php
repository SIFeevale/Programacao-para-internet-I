<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="assets/css/normalize.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lora:400|Bitter:700'>
	</head>
	<body>
		<header class="body">
			<h1>Bem Vindo</h1>
		</header>
		<section class="body">
			<form method="post" action="php/autenticacao.php">
				<label>Login</label>
				<input name="login" id="login">
				<br />
				<label>Senha</label>
				<input name="senha" id="senha" type="password">
				<br />
				<input id="submit" name="submit" type="submit" value="Login">
			</form>
		</section>
	</body>
</html>