<?php

namespace ProjetoPalin;

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

	function getProximoPalin($num)
	{
		$this->testsCase++;
		$num = floor($num);

		if($num < 9){
			return $num+1;
		}
		
		if(strlen($num + 1) > strlen($num)){
			$num++;
		}

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