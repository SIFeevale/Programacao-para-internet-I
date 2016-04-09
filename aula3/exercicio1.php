<!DOCTYPE html>
<html>
<head>
	<title>Média disciplina</title>
</head>
<body>
	<form method="post" action="calculamedia.php">
		<h1>Coloque as informações do aluno</h1>
		<p><label for="nomeDoAluno">Nome do aluno: <input type="text" name="nomeDoAluno" id="nomeDoAluno"></label></p>
		<p><label for="nomeDaDisciplina">Nome da disciplina: <input type="text" name="nomeDaDisciplina" id="nomeDaDisciplina"></label></p>
		<p><label for="notaUm">Nota 1: <input type="number" min="0" max="10" name="notaUm" id="notaUm"></label></p>
		<p><label for="notaDois">Nota 2: <input type="number" min="0" max="10" name="notaDois" id="notaDois"></label></p>
		<p><label for="notaTres">Nota 3: <input type="number" min="0" max="10" name="notaTres" id="notaTres"></label></p>
		<p><label for="numeroTotalDeAulas">Número total de aulas: <input type="number" min="0" max="10" name="numeroTotalDeAulas" id="numeroTotalDeAulas"></label></p>
		<p><label for="numeroTotalDeFaltas">Número total de faltas: <input type="number" min="0" max="10" name="numeroTotalDeFaltas" id="numeroTotalDeFaltas"></label></p>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>