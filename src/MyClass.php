<?php declare(strict_types=1);

namespace s9e\TestProject;

use RangeException;

class MyClass
{
	public function	castInteger(string $string,	int	$clamp): int
	{
		$value = (int) $string;
		if ($value === $clamp && !is_int(+$string))
		{
			throw new RangeException;
		}

		return $value;
	}
}