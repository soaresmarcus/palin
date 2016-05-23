<?php
//namespace ProjetoPalin;

/*use ProjetoPalin\Palin;

$palin = new Palin();

$palin->divideNumero(1234);*/
/**
* 
*/
class Palin
{
	
	public $testsCase;

	function __construct()
	{
		$this->testsCase = 0;
	}

	function divideNumero($valor)
	{
		$numComprimento = strlen((string)$valor);
		$metadeNum = floor($numComprimento/2);
		$increment = (strlen($valor)%2 != 0) ? 1 : 0;

		return array(
				substr((string)$valor, 0, $metadeNum),
				substr((string)$valor, $metadeNum,1),
				substr((string)$valor, $metadeNum+$increment)
				);
	}

	function calcularPalin($num)
	{
		$this->testsCase++;

		if($num <= 9){
			return floor($num) + 1;
		}
		$num++;

		$impar = (strlen($num)%2 != 0);
		$numDividido = $this->divideNumero($num);
		$parteEsq = $numDividido[0];
		$meio = ($impar) ? $numDividido[1] : "";
		$parteDir = $numDividido[2];

		if($parteEsq != strrev($parteDir)){
			if($parteEsq > $parteDir){
				$proxPalin = $parteEsq.$meio.strrev($parteEsq);
			}else{
				if($impar){
					$novaEsq = (int)$parteEsq.$meio + 1;
					$proxPalin = $novaEsq . strrev($parteEsq);
				}else{
					$novaEsq = (int)$parteEsq.$meio + 1;
					$proxPalin = $novaEsq . strrev($novaEsq);
				}
			}

			return $proxPalin;		
		}else{
			if($impar){
				$novaEsq = (int)$parteEsq.$meio + 1;
				$proxPalin = $novaEsq . strrev($parteEsq);
			}else{
				$novaEsq = (int)$parteEsq.$meio + 1;
				$proxPalin = $novaEsq . strrev($novaEsq);
			}
			return $proxPalin;
		}
	}
}

$palin = new Palin();

echo $palin->calcularPalin(100) . " = 100<br>";
echo $palin->calcularPalin(808) . " = 808<br>";
echo $palin->calcularPalin(999) . " = 999<br>";