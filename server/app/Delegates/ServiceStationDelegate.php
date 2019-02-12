<?php
namespace App\Delegates;
use App\Dao\ServiceStationDao;
class ServiceStationDelegate{
	public $service_station_dao;
	public function __construct(){
		$this->service_station_dao=new ServiceStationDao();
	}

	
	
	public function ServiceStation($service_station){
		$this->service_station_dao->register($service_station);
		$result=$this->service_station_dao->insert();
		return $result;
	}
}
?>