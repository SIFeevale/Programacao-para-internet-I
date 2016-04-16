<?php 
	session_start();
	include_once "usuarios.php";
	include_once "Pessoa.class.php";

	if (isset($_SESSION['logado'])) {
		echo 'Logado com sucesso!';
	} else {
		echo 'Falha ao logar. Voce sera redirecionado.';
		header("refresh:5;url=index.html");
	}
?>
