<?php
	$nome = $_REQUEST["nome"];
	$nota1 = $_REQUEST["nota1"];
	$nota2 = $_REQUEST["nota2"];
	$media = ($nota1 + $nota2) / 2;
	echo "A nota 1 foi: " . $nota1;
	echo "<br>";
	echo "A nota 2 foi: " . $nota2;
	echo "<br>";
	echo "A média do aluno " . $nome . " é: " . $media;
?>