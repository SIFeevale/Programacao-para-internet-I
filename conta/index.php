<?php

include_once('Conta.class.php');
include_once('ContaCorrente.class.php');

$minhaContaCorrente = new ContaCorrente(3411, 12, '16/04/2016', 'Rodrigo Boniatti', 123456, 100);
echo $minhaContaCorrente->agencia;

?>