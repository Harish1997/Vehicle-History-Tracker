<?php
namespace App\Delegates;
use App\Dao\VehicleServiceHistoryDao;
class VehicleServiceHistoryDelegate{
	public $vehicle_service_history_dao;
	public function __construct(){
		$this->vehicle_service_history_dao=new VehicleServiceHistoryDao();
	}
	public function VehicleServiceHistory($vehicle_service_history){
		$this->vehicle_service_history_dao->register($vehicle_service_history);
		$result=$this->vehicle_service_history_dao->insert();
		return $result;
	}
}
?>