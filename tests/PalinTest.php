<?php
namespace TestesPalin;

use PHPUnit_Framework_TestCase;
use ProjetoPalin\Palin;

class PalinTest extends PHPUnit_Framework_TestCase
{
	
	public function testRetornaOProximoPalin()
	{
		$user = new Palin();
		$expected = "818";
		$actual = $user->getProximoPalin(808);

		$this->assertEquals($expected, $actual);
		
		$expected = "1001";
		$actual = $user->getProximoPalin(999);

		$this->assertEquals($expected, $actual);

		$expected = "1111";
		$actual = $user->getProximoPalin(1001);

		$this->assertEquals($expected, $actual);

	}
	
}