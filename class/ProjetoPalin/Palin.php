<?php

namespace ProjetoPalin;

class Palin{

	protected $numero;
	protected $proxPalin;
	
	public function __construct($numero)
	{
		$this->numero = $numero;
	}

	public function getProximoPalin()
	{
		if()

		return $this->proxPalin;
	}

	private function divideNumero($num)
	{
		$num_length = strlen((string)$num);
		$metadeNum = ceil($num_length/2);

		vprintf("%d",sscanf($num, "%5$metadeNum"));
	}
}