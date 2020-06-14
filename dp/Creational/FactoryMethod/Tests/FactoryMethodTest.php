<?php declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\FileLogger;
use DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

uses(TestCase::class);

it('can create a stdout logging', function () {
	$loggerFactory = new StdoutLoggerFactory();
	$logger = $loggerFactory->createLogger();
	$this->assertInstanceOf(StdoutLogger::class, $logger);
});

it('can create a file logging', function () {
	$loggerFactory = new FileLoggerFactory(sys_get_temp_dir());	
	$logger = $loggerFactory->createLogger();
	$this->assertInstanceOf(FileLogger::class, $logger);
});
