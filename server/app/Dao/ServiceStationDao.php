<?php
namespace App\Dao;

use App\Models\ServiceStation;

use App\Utils\UtilServiceStation;

class ServiceStationDao{
	public $service_station;
	public $util_service_station;
	public function __construct(){
		$this->service_station=new ServiceStation();
		$this->util_service_station=new UtilServiceStation();
	}


	public function register($service_station){
		$this->service_station->setWorkstationId($service_station["workstation_id"]);
		$this->service_station->setWorkstationName($service_station["workstation_name"]);
		$this->service_station->setManufacturerId($service_station["manufacturer_id"]);
		$this->service_station->setLocationId($service_station["location_id"]);
		$this->service_station->setManagerId($service_station["manager_id"]);
		$this->service_station->setWorkstationContact($service_station["workstation_contact"]);
	}
	public function insert(){
		$result=$this->util_service_station->insert($this->service_station->getWorkstationId(),$this->service_station->getWorkstationName(),$this->service_station->getManufacturerId(),$this->service_station->getLocationId(),$this->service_station->getManagerId(),$this->service_station->getWorkstationContact());
		return $result;
	}
}
?>