<?php
namespace App\Delegates;
use App\Dao\PoliceStationDao;
class PoliceStationDelegate{
	public $police_station_dao;
	public function __construct(){
		$this->police_station_dao=new PoliceStationDao();
	}
	public function policeStation($station){
		$this->police_station_dao->register($station);
		$result=$this->police_station_dao->insert();
		return $result;
	}
}
?>