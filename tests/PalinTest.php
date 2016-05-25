<?php
namespace TestesPalin;

use PHPUnit_Framework_TestCase;
use ProjetoPalin\Palin;

class PalinTest extends PHPUnit_Framework_TestCase
{
	
	public function testRetornaOProximoPalin()
	{
		$user = new Palin();
		
		$expected = "9877789";
		$actual = $user->getProximoPalin(9876831);
		$this->assertEquals($expected, $actual);
		
		$expected = "74647";
		$actual = $user->getProximoPalin(74569);
		$this->assertEquals($expected, $actual);

		$expected = "655556";
		$actual = $user->getProximoPalin(654654);
		$this->assertEquals($expected, $actual);

		$expected = "11";
		$actual = $user->getProximoPalin(9);
		$this->assertEquals($expected, $actual);
	}

	public function testDivideNumeroAoMeio()
	{
		$user = new Palin();
		
		$expected = array(9,9,9);
		$actual = $user->divideNumero(999);
		$this->assertEquals($expected, $actual);

		$expected = array(10,0,01);
		$actual = $user->divideNumero(10001);
		$this->assertEquals($expected, $actual);
	}
	
}