<?php
	if (isset($_POST['nomeDoAluno']) && $_POST['nomeDoAluno'] != '') {
		$nomeDoAluno = $_POST['nomeDoAluno'];
		$nomeDaDisciplina = $_POST['nomeDaDisciplina'];
		$notaUm = $_POST['notaUm'];
		$notaDois = $_POST['notaDois'];
		$notaTres = $_POST['notaTres'];
		$numeroTotalDeAulas = $_POST['numeroTotalDeAulas'];
		$numeroTotalDeFaltas = $_POST['numeroTotalDeFaltas'];

		$mediaDaDisciplina = ($notaUm + $notaDois + $notaTres) / 3;
		$porcentagemDeFrequencia = 100 - ((100/$numeroTotalDeAulas) * $numeroTotalDeFaltas);

		if (($mediaDaDisciplina >= 7) && ($porcentagemDeFrequencia >=75))  {
			$situacao = "Aprovado";
			$color = "green";
		}
		elseif (($mediaDaDisciplina >= 3 && $mediaDaDisciplina < 7) && ($porcentagemDeFrequencia >= 75)) {
			$situacao = "Avaliação complementar";
			$color = "yellow";
		}
		else {
			$situacao = "Reprovado";
			$color = "red";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Média das notas</title>
</head>
<body>
	<h1>Olá <?php echo strtoupper($nomeDoAluno) ?></h1>
	<h2>Sua média na disciplina <?php echo strtolower($nomeDaDisciplina) ?> foi <?php echo number_format($mediaDaDisciplina, 2) ?>.</h2>
	<h3>Sua frequência foi de <?php echo number_format($porcentagemDeFrequencia, 2) ?>%</h3>
	<h3 style="color: <?php echo $color ?>">Sua situação é de: <?php echo $situacao ?></h3>
</body>
</html>