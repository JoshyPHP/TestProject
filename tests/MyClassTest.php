<?php declare(strict_types=1);

namespace s9e\TestProject\Tests;

use PHPUnit\Framework\TestCase;
use s9e\TestProject\MyClass;

class MyClassTest extends TestCase
{
	public function testInteger()
	{
		$expected = 123;
		$actual   = (new MyClass)->castInteger('123', PHP_INT_MAX);

		$this->assertSame($expected, $actual);
	}

	public function testIntegerMax()
	{
		$expected = PHP_INT_MAX;
		$actual   = (new MyClass)->castInteger((string) PHP_INT_MAX, PHP_INT_MAX);

		$this->assertSame($expected, $actual);
	}

	public function testOverflow()
	{
		$this->expectException('RangeException');

		(new MyClass)->castInteger((string) (PHP_INT_MAX + 1), PHP_INT_MAX);
	}
}