<?php
namespace TestesPalin;

use PHPUnit_Framework_TestCase;
use ProjetoPalin\Palin;

class PalinTest extends PHPUnit_Framework_TestCase
{
	
	public function testRetornaOProximoPalin()
	{
		$user = new Palin("201");
		$expected = "202";
		$actual = $user->getProximoPalin();

		$this->assertEquals($expected, $actual);
	}
	
}