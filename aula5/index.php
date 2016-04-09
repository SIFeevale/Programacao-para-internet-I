<?php

include_once('Pessoa.class.php');
include_once('Conta.class.php');

$rodrigo = new Pessoa(10, 'Rodrigo', 1.78, 20, '18/03/1996', 'Ens. Sup. Inc.', 100000);
$caixa = new Conta(1034, 38291, $rodrigo, '28/05/2010', 3400, false);

$rodrigo->crescer(0.10);
$rodrigo->formar('Ens. Sup. Com.');
$rodrigo->envelhecer(2);

$caixa->retirar(10.50);
$caixa->depositar(20.50);
$caixa->obterSaldo();

echo(var_dump($rodrigo));
echo(var_dump($caixa));

?>