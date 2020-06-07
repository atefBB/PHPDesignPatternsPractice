<?php
namespace DesignPatterns\Creational\AbstracFactory;

interface WriterFactory 
{
	public function createCsvWriter(): CsvWriter;
	public function createJsonWritez(): JsonWriter;
}
