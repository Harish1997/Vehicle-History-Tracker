<?php
namespace App\Delegates;
use App\Dao\ServiceStationLocationDao;
class ServiceStationLocationDelegate{
	public $service_station_location_dao;
	public function __construct(){
		$this->service_station_location_dao=new ServiceStationLocationDao();
	}
	public function ServiceStationLocation($service_station_location){
		$this->service_station_location_dao->register($service_station_location);
		$result=$this->service_station_location_dao->insert();
		return $result;
	}
}
?>