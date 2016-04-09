<?php

class ClassName extends Conta {

	public $limite;
	const CPMF = 0.038;

	function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada = 'N') {
		parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite);
		$this->limite = $limite;

		function retirar($quantidade) {
			echo $quantidade;
		}
	}
}

?>