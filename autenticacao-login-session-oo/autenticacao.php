<?php 
	header("Content-Type: text/html; charset=iso-8859-1");
	session_start();
	include_once "usuarios.php";
	include_once "Pessoa.class.php";

	$objeto = new Pessoa($_POST["txtNome"],$_POST["txtPassword"]);
	$logado = false;

	foreach ($vetUsuarios as $user => $senha) {
		if (($objeto->user === $user) && ($objeto->password == $senha)){
			$logado = true;
			break;
		}
	}

	if ($logado) {
		$_SESSION['objeto'] = serialize($objeto);
		$_SESSION['logado'] = 'yes';
		header("Location: sucesso.php");
	} else {
		header("Location: error.html");
	}
?>