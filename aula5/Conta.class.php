<?php
class Conta {
	public $agencia;
	public $codigo;
	public $titular;
	public $dataCriacao;
	public $saldo;
	public $ativa;

	function __construct($auxAgencia, $auxCodigo, $auxTitular, $auxDataCriacao, $auxSaldo, $auxAtiva) {
		$this->agencia = $auxAgencia;
		$this->codigo = $auxCodigo;
		$this->titular = $auxTitular;
		$this->dataCriacao = $auxDataCriacao;
		$this->saldo = $auxSaldo;
		$this->ativa = $auxAtiva;
	}

	function retirar($quantia) {
		if ($quantia > 0) {
			$this->saldo -= $quantia;
		}
		else {
			return false;
		}
	}

	function depositar($quantia) {
		if ($quantia > 0) {
			$this->saldo += $quantia;
		}
		else {
			return false;
		}
	}

	function obterSaldo() {
		echo($this->saldo);
	}
}
?>