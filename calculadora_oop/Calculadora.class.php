<?php
class Calculadora {
	public $valor1;
	public $valor2;
	public $operador;
	public $resultado;

	function __construct($valor1, $valor2, $operador) {
		$this->valor1 = $valor1;
		$this->valor2 = $valor2;
		$this->operador = $operador;
		$this->resultado = 0;
	}

	function adicionar() {
		return $this->valor1 + $this->valor2;
	}

	function subtrair() {
		return $this->valor1 - $this->valor2;
	}

	function dividir() {
		if ($this->valor2 == 0) {
			return 'Não existe divisão por zero.';
		}
		else {
			return $this->valor1 / $this->valor2;
		}
	}

	function multiplicar() {
		return $this->valor1 * $this->valor2;
	}

	function fatorial() {
		$total = 1;
		for ($i=$this->valor1; $i >= 1; $i--) {
			$total *= $i;
		}
		return $total;
	}

	function potencia() {
		if ($this->valor2 != 0) {
			$total = 1;
			for ($i=0; $i < $this->valor2; $i++) {
				$total *= $this->valor1;
			}
			return $total;
		}
		else {
			return 0;
		}
	}

	// function fatorialRecursiva() {
	// 	if ($this->valor1 == 1) {
	// 		return 1;
	// 	}
	// 	else {
	// 		return $this->valor1 * fatorialRecursiva($this->valor1-1);
	// 	}
	// }

	function executaOperacao() {

		if ($this->valor1 == "") {
			$this->resultado = "Por favor, informe o primeiro valor.";
		}

		// Fatorial é calculado apenas o primeiro operando.
		elseif ($this->operador != 'fatorial' && $this->valor2 == "") {
			$this->resultado = "Por favor, informe o segundo valor.";
		}

		elseif ($this->valor1 == "" &&  $this->valor2 == "") {
			$this->resultado= "Por favor, informe os valores para o cálculo.";
		}

		else {
			switch ($this->operador) {
				case 'soma':
					$this->resultado = $this->adicionar();
					break;

				case 'subtracao':
					$this->resultado = $this->subtrair();
					break;

				case 'divisao':
					$this->resultado = $this->dividir();
					break;

				case 'multiplicacao':
					$this->resultado = $this->multiplicar();
					break;

				case 'fatorial':
					$this->resultado = $this->fatorial();
					break;

				// case 'fatorialRecursiva':
				// 	$this->resultado = $this->fatorialRecursiva();
				// 	break;

				case 'potencia':
					$this->resultado = $this->potencia();
					break;

				default:
					$this->resultado = "Operação inválida";
					break;
			}
		}
	}
}
?>