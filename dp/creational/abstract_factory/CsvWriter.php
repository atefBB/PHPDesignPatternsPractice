<?php
namespace DesignPatters\Creational\AbstracFactory;

interface CsvWriter 
{
	public function write(array $line): string;
}
