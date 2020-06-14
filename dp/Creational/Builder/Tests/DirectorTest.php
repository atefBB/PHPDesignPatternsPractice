<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

uses(TestCase::class);

it('can build a truck', function() {
	$truckBuilder = new TruckBuilder();
	$newVehicle = (new Director())->build($truckBuilder);
	$this->assertInstanceOf(Truck::class, $newVehicle);
});

it('can build a Car', function () {
	$carBuilder = new CarBuilder();
	$newVehicle = (new Director())->build($carBuilder);
	$this->assertInstanceOf(Car::class, $newVehicle);
});
