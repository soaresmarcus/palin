<?php
//namespace ProjetoPalin;

/*use ProjetoPalin\Palin;

$palin = new Palin();

$palin->divideNumero(1234);*/

function divideNumero($num)
{
	$num_length = strlen((string)$num);
	$metadeNum = ceil($num_length/2);
	
	return array(
			substr((string)$num, 0, $metadeNum),
			substr((string)$num, $metadeNum)
			);
}

function palin($num)
{
	if($num <= 9){
		return floor($num) + 1;
	}

	$numDividido = divideNumero($num);

	if($numDividido[0] > $numDividido[1] && strlen($numDividido[0]) == $numDividido[1] && strrev($numDividido[0]) >= $numDividido[1]){
		$proxPalin = $numDividido[0] . strrev($numDividido[0]);
	}else{
		(int)$numDividido[0]++;
		$proxPalin = $numDividido[0] . strrev($numDividido[0]);
	}
	return $proxPalin;
}

echo palin(123);