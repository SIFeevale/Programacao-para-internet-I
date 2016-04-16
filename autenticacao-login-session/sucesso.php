<?php 
	session_start();
	require_once('usuarios.php');

	if ($_SESSION['logado'] == 'true') {
		echo 'Logado com sucesso!';
	} else {
		echo 'Falha ao logar. Voce sera redirecionado.';
		header("Location: index.html");
	}
?>
