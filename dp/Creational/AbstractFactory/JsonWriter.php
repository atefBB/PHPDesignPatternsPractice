<?php
namespace DesignPatterns\Creational\AbstracFactory;

interface JsonWriter 
{
	public function write(array $data, bool $formatted): string;
}
