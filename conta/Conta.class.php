<?php

class Conta {
	public $agencia;
	public $codigo;
	public $dataDeCriacao;
	public $titular;
	public $senha;
	public $saldo;
	public $cancelada;

	function __construct ($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada = 'N') {
		$this->agencia = $agencia;
		$this->codigo = $codigo;
		$this->dataDeCriacao = $dataDeCriacao;
		$this->titular = $titular;
		$this->senha = $senha;
		$this->saldo = $saldo;
		$this->cancelada = $cancelada;
	}

	function retirar($quantia) {
		echo($quantia);
	}

	function depositar($quantia) {
		echo($quantia);
	}

	function obterSado() {
		echo("Saldo");
	}
}

?>