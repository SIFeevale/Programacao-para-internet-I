<?php
	if (isset($_REQUEST["nome"]) && $_REQUEST["nome"] != "") {
		$nome = $_REQUEST["nome"];
		$sobrenome = $_REQUEST["sobrenome"];
		$email = $_REQUEST["email"];
		$dataDeAniversario = $_REQUEST["dataDeAniversario"];
		$peso = $_REQUEST["peso"];
		$altura = $_REQUEST["altura"];
		$observacao = $_REQUEST["observacao"];
		$imc = $peso / (($altura/100) ** 2);
		$situacao = '';

		if ($imc <= 18.5) {
			$situacao = 'Abaixo do peso ideal';
		} elseif ($imc > 18.5 and $imc <= 24.9) {
			$situacao = 'Peso ideal';
		} elseif ($imc > 24.9 and $imc <= 29.9) {
			$situacao = 'Sobrepeso';
		} elseif ($imc > 29.9 and $imc <= 34.9) {
			$situacao = 'Obesidade grau I';
		} elseif ($imc > 34.9 and $imc <= 39.9) {
			$situacao = 'Obesidade grau II';
		} else {
			$situacao = 'Obesidade grau III';
		}

		echo "Olá " . $nome . " " . $sobrenome;
		echo "<br>";
		echo "Seu IMC é: " . $imc;
		echo "<br>";
		echo "Sua situação é: " . $situacao;
		echo "<br>";
		echo "Enviamos um email para " . $email . " com todos os detalhes";
		if ($observacao != '') {
			echo "<br>";
			echo "Nossa observação é: " . $observacao;
		}
		echo "<br>";

		$teste = 2;
		echo $teste++;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cálculo IMC</title>
</head>
<body>
	<h1>Cálculo IMC</h1>
	<form name="frm" method="post" action="exercicio1.php">
		<p>Nome: <input type="text" name="nome" maxlength="80" autofocus required></p>
		<p>Sobrenome: <input type="text" name="sobrenome" maxlength="80" required></p>
		<p>Email: <input type="email" name="email" maxlength="80" required></p>
		<p>Data de aniversário: <input type="date" name="dataDeAniversario"></p>
		<p>Peso: <input id="peso" type="range" name="peso" min="0" max="200" value="70" required><span id="spanPeso"></span></p>
		<p>Altura (cm): <input type="number" name="altura" min="30" max="300" required></p>
		<p>Observação: <textarea name="observacao" rows="5" cols="80"></textarea></p>
		<p><input id="limpar" type="reset" value="Limpar"></p>
		<input type="submit" name="enviar" value="Enviar os dados">
	</form>

	<script>
	  var peso = document.getElementById('peso'),
	      limpar = document.getElementById('limpar'),
	      spanPeso = document.getElementById('spanPeso');

	  function mostrarPeso() {
	    spanPeso.innerHTML = peso.value + "kg";
	  }

	  mostrarPeso();

	  peso.addEventListener('input', function() {
	    mostrarPeso();
	  }, false);

	  limpar.onclick = function() {
	    spanPeso.innerHTML = "70kg";
	  };
	</script>
</body>
</html>