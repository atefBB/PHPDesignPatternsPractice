<?php declare(strict_types=1);
namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
	private Car $car;

	public function addDoors()
	{
		$this->car->setPart("rightDoor", new Door());
		$this->car->setPart("leftDoor", new Door());
		$this->car->setPart("trunkLid", new Door());
	}
	
	public function addEngine() 
	{
		$this->car->setPart("truckEngine", new Engine());
	}
	
	public function addWheel()
	{
		$this->car->setPart("weelLF", new Weel());
		$this->car->setPart("weelRF", new Weel());
		$this->car->setPart("weelLR", new Weel());
		$this->car->setPart("weelRR", new Weel());
	}

	public function createVehicle()
	{
		$this->car = new Car();
	}
	
	public function getVehicle(): Vehicle
	{
		return $this->car;
	}
}