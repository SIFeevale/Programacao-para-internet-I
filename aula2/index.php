<?php
	if (isset($_REQUEST["nome"]) && $_REQUEST["nome"] != "") {
		$nome = $_REQUEST["nome"];
		$nota1 = $_REQUEST["nota1"];
		$nota2 = $_REQUEST["nota2"];
		$media = ($nota1 + $nota2) / 2;
		echo "A nota 1 foi: " . $nota1;
		echo "<br>";
		echo "A nota 2 foi: " . $nota2;
		echo "<br>";
		echo "A média do aluno " . $nome . " é: " . $media;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<form name="frm" method="post" action="index.php">
		<p>Nome: <input type="text" name="nome" value=""></p>
		<p>Nota 1: <input type="number" name="nota1" min="0" max="10"></p>
		<p>Nota 2: <input type="number" name="nota2" min="0" max="10"></p>
		<input type="submit" name="enviar" value="Enviar os dados">
	</form>
</body>
</html>