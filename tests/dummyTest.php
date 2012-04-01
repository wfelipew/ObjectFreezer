<?php



namespace  Freezer\tests\Dummy;

class StackTest extends \PHPUnit_Framework_TestCase
{
	public function testDummy()
	{
		$this->assertEquals(3,3);
	}


	/**
	*@expectedException InvalidArgumentException
	*/
	public function testDummyException()
	{
		throw new \InvalidArgumentException("Execao");
	}
}


