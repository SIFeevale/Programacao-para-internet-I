<?php
	include_once 'Calculadora.class.php';

	if (isset($_REQUEST['operador'])) {

		$operando1 = $_REQUEST['operando1'];
		$operador = $_REQUEST['operador'];
		$operando2 = $_REQUEST['operando2'];

		$calculo = new Calculadora($operando1, $operando2, $operador);
		$calculo->executaOperacao();

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<h1>Calculadora</h1>
	<form action="index.php" method="post">
		<p>
			<label for="operando1">Operando 1:</label>
			<input type="number" id="operando1" name="operando1" value=<?php if (isset($_REQUEST['operando1'])) echo $calculo->valor1; ?>></input>
		</p>
		<p>
			<label for="operador">Operador: </label>
			<select name="operador" id="operador">
				<option value="soma" <?php if (isset($_REQUEST['operador']) && $_REQUEST['operador'] == "soma") echo "selected"; ?>>Soma</option>
				<option value="subtracao" <?php if (isset($_REQUEST['operador']) && $_REQUEST['operador'] == "subtracao") echo "selected"; ?>>Subtração</option>
				<option value="divisao" <?php if (isset($_REQUEST['operador']) && $_REQUEST['operador'] == "divisao") echo "selected"; ?>>Divisão</option>
				<option value="multiplicacao" <?php if (isset($_REQUEST['operador']) && $_REQUEST['operador'] == "multiplicacao") echo "selected"; ?>>Multiplicação</option>
				<option value="fatorial" <?php if (isset($_REQUEST['operador']) && $_REQUEST['operador'] == "fatorial") echo "selected"; ?>>Fatorial</option>
				<option value="potencia" <?php if (isset($_REQUEST['operador']) && $_REQUEST['operador'] == "potencia") echo "selected"; ?>>Potência</option>
			</select>
		</p>
		<p>
			<label for="operando2">Operando 2: </label>
			<input type="number" id="operando2" name="operando2" value=<?php if (isset($_REQUEST['operando2'])) echo $calculo->valor2; ?>>
		</p>
		<input type="submit" value="Calculcar"></input>
		<?php if (isset($_REQUEST['operador'])) echo '<p>Resultado: ' . $calculo->resultado . '</p>'; ?>
</body>
</html>