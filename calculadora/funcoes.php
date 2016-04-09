<?php

function adicionar($op1, $op2) {
	return $op1 + $op2;
}

function subtrair($op1, $op2) {
	return $op1 - $op2;
}

function dividir($op1, $op2) {
	if ($op2 == 0) {
		return 'Não existe divisão por zero.';
	}
	else {
		return $op1 / $op2;
	}
}

function multiplicar($op1, $op2) {
	return $op1 * $op2;
}

function fatorial($op1) {
	$total = 1;
	for ($i=$op1; $i >= 1; $i--) {
		$total *= $i;
	}
	return $total;
}

function potencia($op1, $op2) {
	if ($op2 != 0) {
		$total = 1;
		for ($i=0; $i < $op2; $i++) {
			$total *= $op1;
		}
		return $total;
	}
	else {
		return 0;
	}
}

function fatorialRecursiva($op1) {
	if ($op1 == 1) {
		return 1;
	}
	else {
		return $op1 * fatorialRecursiva($op1-1);
	}
}

?>