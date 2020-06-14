<?php declare(strict_types=1);
namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Wheel;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\Parts\Vehicle;

class TruckBuilder implements Builder
{
	private $truck;

	public function addDoors()
	{
		$this->truck->setPart("rightDoor", new Door());
		$this->truck->setPart("leftDoor", new Door());
	}
	
	public function addEngine() 
	{
		$this->truck->setPart("truckEngine", new Engine());
	}
	
	public function addWheel()
	{
		$this->truck->setPart("weel1", new Wheel());
		$this->truck->setPart("weel2", new Wheel());
		$this->truck->setPart("weel3", new Wheel());
		$this->truck->setPart("weel4", new Wheel());
		$this->truck->setPart("weel5", new Wheel());
		$this->truck->setPart("weel6", new Wheel());

	}

	public function createVehicle()
	{
		$this->truck = new Truck();
	}
	
	public function getVehicle(): Vehicle
	{
		return $this->truck;
	}
}
