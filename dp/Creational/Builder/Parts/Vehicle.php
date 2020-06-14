<?php
namespace DesignPatterns\Creational\Builder\Parts;

class Vehicle
{
	private $data = [];

	public function setPart(string $key, object $value)
	{
		$this->data[$key] = $value;
	}
}
