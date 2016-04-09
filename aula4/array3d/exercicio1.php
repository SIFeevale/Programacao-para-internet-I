<?php

$supermercado =
array("arroz" => array(
	      "filialSP" => array (
	          "jan" => 100,
	          "fev" => 120,
	          "mar" => 110
	      ),
	      "filialRJ" => array (
	          "jan" => 90,
	          "fev" => 85,
	          "mar" => 95
	      )
	  ),
	  "feijão" => array (
	      "filialSP" => array (
	          "jan" => 105,
	          "fev" => 124,
	          "mar" => 98
	      ),
	      "filialRJ" => array (
	          "jan" => 96,
	          "fev" => 102,
	          "mar" => 96
	       )
	  ),
	  "sal" => array (
	      "filialSP" => array (
	          "jan" => 60,
	          "fev" => 70,
	          "mar" => 65
	      ),
	      "filialRJ" => array (
	          "jan" => 65,
	          "fev" => 56,
	          "mar" => 73
	      )
	   )
);

foreach ($supermercado as $alimento => $vetoralimento) {
	echo($alimento);
	echo('<br>');
	foreach ($vetoralimento as $filial => $vetorFilial) {
		echo('––– ' . $filial);
		echo('<br>');
		foreach ($vetorFilial as $mes => $valor) {
			echo('–––––– ' . $mes . ' = ' . $valor);
			echo('<br>');
		}
	}
	echo('<br>');
}

?>