<?php
namespace DesignPatters\Creational\AbstracFactory;

class WinCsvWriter implements CsvWriter 
{
	public function write(array $line): string
	{
		return join(',', $line) . "\r\n";
	}
}
