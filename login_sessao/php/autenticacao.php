<?php

	include('usuarios.php');
	session_start();

	$_SESSION["logado"] = false;

	$login = $_POST['login'];
	$password = $_POST['senha'];

	foreach ($usuarios as $usuario => $senha) {
		if($usuario == $login && $senha == $password){
			$_SESSION["logado"] = true;
			header("Location: ../logado.php");
			return;
		}		
	}
	// if($_SESSION["logado"] == false){
	// 	header("Location: ../erro.php");
	// }
