<?php
namespace App\Dao;

use App\Models\PoliceStation;
use App\Utils\UtilPoliceStation;

class PoliceStationDao{
	public $station;
	public $utilauthority;
	public function __construct(){
		$this->station=new PoliceStation();
		$this->util_station=new UtilPoliceStation();
	}

	public function register($station){

		$this->station->setStationId($station["station_id"]);
		$this->station->setStationName($station["station_name"]);
		$this->station->setInspectorName($station["inspector_name"]);
		$this->station->setStationContact($station["station_contact"]);
		
	}
	public function insert(){

		$result=$this->util_station->insert($this->station->getStationId(),$this->station->getStationName(),$this->station->getInspectorName(),$this->station->getStationContact());
		return $result;
	}

}
?>