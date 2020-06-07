<?php
namespace DesignPatterns\Creational\AbstractFactory;

class WinWriterFactory implements WriterFactory 
{
	public function createCsvWriter(): CsvWriter
	{
		return new WinCsvWriter();
	}

	public function createJsonWritez(): JsonWriter
	{
		return new WinJsonWriter();
	}
}
