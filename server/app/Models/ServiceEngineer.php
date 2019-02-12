<?php
namespace App\Models;

class ServiceEngineer{
	public $workstation_id,$service_engineer_id,$contact;

	public function __construct(){

	}
	public function setWorkstationId($workstation_id){
		$this->workstation_id=$workstation_id;
	}
	public function setServiceEngineerId($service_engineer_id){
		$this->service_engineer_id=$service_engineer_id;
	}
	public function setContact($contact){
		$this->contact=$contact;
	}

	public function getWorkstationId(){
			return $this->workstation_id;
	}
	public function getServiceEngineerId(){
			return $this->service_engineer_id;
	}
	public function getContact(){
			return $this->contact;
	}
}
?>