<?php 
	header("Content-Type: text/html; charset=iso-8859-1");
	session_start();

	include_once "usuarios.php";

	$userLogin = $_POST["txtNome"];
	$passwordLogin = $_POST["txtPassword"];
	$logado = false;

	foreach ($vetUsuarios as $user => $senha) {
		if (($userLogin === $user) && ($passwordLogin == $senha)){
			$logado = true;
			break;
		}
	}

	if ($logado) {
		$_SESSION['user'] = $userLogin;
		$_SESSION['password'] = $passwordLogin;
		$_SESSION['logado'] = 'true';
		header("Location: sucesso.php");
	} else {
		header("Location: error.html");
	}
?>