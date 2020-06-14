<?php declare(strict_types=1);
namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class CarBuilder implements Builder
{
	private $car;

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
		$this->car->setPart("weelLF", new Wheel());
		$this->car->setPart("weelRF", new Wheel());
		$this->car->setPart("weelLR", new Wheel());
		$this->car->setPart("weelRR", new Wheel());
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
