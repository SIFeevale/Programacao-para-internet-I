<?php
include_once('usuarios.php');

if (isset($_POST["nome"]) && $_POST["nome"] != "") {
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
}

// if (isset($usuario[$nome]) == $senha) {
// 	header("Location: logado.php");
// }
// else {
// 	header("Location: error.php");
// }

$logado = false;

foreach ($usuarios as $usuarioNome => $usuarioSenha) {
	if (($nome == $usuarioNome) && ($senha == $usuarioSenha)) {
		$logado = true;
	}
}

if ($logado) {
	header("Location: logado.php");
}
else {
	header("Location: error.php");
}

?>