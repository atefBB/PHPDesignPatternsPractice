<?php
namespace DesignPatterns\Creational\Builder\Parts;

class Vehicle
{
	private array $data = [];

	public function setPart(string $key, object $value)
	{
		$this->data[$key] = $value;
	}
}
