<?php
namespace DesignPatterns\Creational\AbstracFactory;

class WinCsvWriter implements CsvWriter 
{
	public function write(array $line): string
	{
		return join(',', $line) . "\r\n";
	}
}
