<?php
class Pessoa {
	public $codigo;
	public $nome;
	public $altura;
	public $idade;
	public $nascimento;
	public $escolaridade;
	public $salario;

	function __construct($auxCodigo, $auxNome, $auxAltura, $auxIdade, $auxNascimento, $auxEscolaridade, $auxSalario) {
		$this->codigo = $auxCodigo;
		$this->nome = $auxNome;
		$this->altura = $auxAltura;
		$this->idade = $auxIdade;
		$this->nascimento = $auxNascimento;
		$this->escolaridade = $auxEscolaridade;
		$this->salario = $auxSalario;
	}

	function crescer($centimetros) {
		if ($centimetros > 0) {
			$this->altura += $centimetros;
		}
		else {
			return false;
		}
	}

	function formar($titulo) {
		$this->escolaridade = $titulo;
	}

	function envelhecer($anos) {
		if ($anos > 0) {
			$this->idade += $anos;
		}
		else {
			return false;
		}
	}
}
?>