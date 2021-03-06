<?php // lint >= 7.2

class Whatever
{

	private function noTypeHintNoAnnotation($a)
	{

	}

	/**
	 * @param int[] $a
	 */
	public function arrayTypeHint($a): void
	{

	}

	/**
	 * @param int[]|null $a
	 */
	public function arrayTypeHintWithNull($a): void
	{

	}

	/**
	 * @param array{foo: int} $a
	 */
	public function arrayShapeTypeHint($a): void
	{

	}

	/**
	 * @param string|null $a
	 */
	public function twoTypeWithNull($a): void
	{
	}

	/**
	 * @param int[]|\Traversable $a
	 */
	public function specificTraversable($a)
	{

	}

	/**
	 * @param string ...$a
	 */
	public function variadic(...$a)
	{

	}

	/**
	 * @param string $a
	 */
	public function reference(&$a)
	{

	}

	/**
	 * @param string $a
	 */
	public function uselessAnnotation(string $a)
	{

	}

	public function missingAnnotationForTraversable(array $a)
	{

	}

	/**
	 * @param array $a
	 */
	public function missingItemsSpecification(array $a)
	{

	}

	/**
	 * @param \Closure(): array $parameter
	 */
	public function callableParameter($parameter): void
	{

	}

	/**
	 * @param \Traversable $a
	 */
	public function onlyTraversable($a)
	{

	}

	/**
	 * @param array{array} $a
	 */
	public function arrayShapeWithoutItemsSpecification(array $a)
	{

	}

	/**
	 * @param \Generic<array> $a
	 */
	public function genericWithoutItemsSpecification(\Generic $a)
	{

	}

	/**
	 * @param array[]&\Traversable $a
	 */
	public function traversableIntersection($a)
	{
	}

	/**
	 * @param \Traversable&array[] $a
	 */
	public function traversableIntersectionDifferentOrder($a)
	{
	}

	/**
	 * @param null|\Traversable $a
	 */
	public function traversableNull($a)
	{
	}

	/**
	 * @param object $a
	 */
	public function objectParameter($a)
	{
	}

}
