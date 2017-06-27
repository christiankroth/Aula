<?php
define('PIS', 0.65);
define('COFINS', 3);
define('CSLL', 1);

$valorFinal = calcula_total(150, 15);

echo $valorFinal

function calcula_total($totalVendido, $frete){
	$totalVendido = $totalVendido + ($totalVendido*(PIS/100));
	$totalVendido = $totalVendido + ($totalVendido*(COFINS/100));
	$totalVendido = $totalVendido + ($totalVendido*(CSLL/100));
	
	return $totalVendido;
}

?>
