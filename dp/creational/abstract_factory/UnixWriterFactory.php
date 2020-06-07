<?php
namespace DesignPatters\Creational\AbstracFactory;

class UnixWriterFactory implements WriterFactory 
{
	public function createCsvWriter(): CsvWriter
	{
		return new UnixCsvWriter();
	}

	public function createJsonWritez(): JsonWriter
	{
		return new UnixJsonWriter();
	}
}
