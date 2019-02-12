<?php
namespace App\Dao;

use App\Models\ServiceStationLocation;

use App\Utils\UtilServiceStationLocation;

class ServiceStationLocationDao{
	public $service_station_location;
	public $util_service_station_location;
	public function __construct(){
		$this->service_station=new ServiceStationLocation();
		$this->util_service_station=new UtilServiceStationLocation();
	}


	public function register($service_station_location){
		$this->service_station_location->setCountry($service_station_location["country"]);
		$this->service_station_location->setState($service_station_location["state"]);
		$this->service_station_location->setCity($service_station_location["city"]);
		$this->service_station_location->setStreet($service_station_location["street"]);
		$this->service_station_location->setNumber($service_station_location["number"]);
		
	}
	public function insert(){
		$result=$this->util_service_station_location->insert($this->service_station_location->getCountry(),$this->service_station_location->getState(),$this->service_station_location->getCity(),$this->service_station_location->getStreet(),$this->service_station_location->getNumber());
		return $result;
	}
}
?>