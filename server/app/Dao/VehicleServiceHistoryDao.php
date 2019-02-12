<?php
namespace App\Dao;

use App\Models\VehicleServiceHistory;

use App\Utils\UtilVehicleServiceHistory;

class VehicleServiceHistoryDao{
	public $vehicle_service_history;
	public $util_vehicle_service_history;

	public function __construct(){
		$this->vehicle_service_history=new VehicleServiceHistory();
		$this->util_vehicle_service_history=new UtilVehicleServiceHistory();
	}


	public function register($vehicle_service_history){
		$this->vehicle_service_history->setVin($vehicle_service_history["vin"]);
		$this->vehicle_service_history->setRegistrationId($vehicle_service_history["registration_id"]);
		$this->vehicle_service_history->setServiceDate($vehicle_service_history["service_date"]);
		$this->vehicle_service_history->setWorkstationId($vehicle_service_history["ws_id"]);
		$this->vehicle_service_history->setServiceId($vehicle_service_history["service_id"]);
		$this->vehicle_service_history->setServiceDescription($vehicle_service_history["service_description"]);
		$this->vehicle_service_history->setServiceEngineerId($vehicle_service_history["service_engineer_id"]);


	public function insert(){
		$result=$this->util_vehicle_service_history->insert($this->vehicle_service_history->getVin(),$this->vehicle_service_history->getRegistrationId(),$this->vehicle_service_history->getServiceDate(),$this->vehicle_service_history->getWorkstationId(),$this->vehicle_service_history->getServiceId(),$this->vehicle_service_history->getServiceDescription(),$this->vehicle_service_history->getServiceEngineerId());
		return $result;
	}

}
?>