<?php
	session_start();
	
	if($_SESSION["logado"] == NULL || $_SESSION["logado"] == false){
		header("Location: ops.php");
	}

?>
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
		<h1>Usuário logado com sucesso!</h1>
		<br />
		<form method="post" action="php/deslogar.php">
			<input id="submit" name="submit" type="submit" value="Deslogar">
		</form>
	</body>
</html>