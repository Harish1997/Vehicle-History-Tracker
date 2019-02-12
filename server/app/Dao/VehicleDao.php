<?php
namespace App\Dao;

use App\Models\Vehicle;

use App\Utils\UtilVehicle;

class VehicleDao{
	public $vehicle;
	public $util_vehicle;
	public function __construct(){
		$this->vehicle=new Vehicle();
		$this->util_vehicle=new UtilVehicle();
	}

	public function register($vehicle){
		$this->vehicle->setVin($vehicle["vin"]);
		$this->vehicle->setManufacturerId($vehicle["manufacturer"]);
		$this->vehicle->setYear($vehicle["year_of_mfg"]);
		$this->vehicle->setModel($vehicle["model"]);
		$this->vehicle->setColor($vehicle["color"]);
	}
	public function insert(){
		$result=$this->util_vehicle->insert($this->vehicle->getVin(),$this->vehicle->getManufacturerId(),$this->vehicle->getYear(),$this->vehicle->getModel(),$this->vehicle->getColor());
		return $result;
	}

}
?>