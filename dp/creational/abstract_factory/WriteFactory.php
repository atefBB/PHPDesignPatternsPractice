<?php
namespace DesignPatters\Creational\AbstracFactory;

interface WriterFactory 
{
	public function createCsvWriter(): CsvWriter;
	public function createJsonWritez(): JsonWriter;
}
