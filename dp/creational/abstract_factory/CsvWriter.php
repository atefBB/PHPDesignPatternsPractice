<?php
namespace DesignPatterns\Creational\AbstracFactory;

interface CsvWriter 
{
	public function write(array $line): string;
}
