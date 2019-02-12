<?php
namespace App\Models;

class VehicleServiceHistory{
	public $vin,$registration_id,$service_date,$workstation_id,$service_id,$service_description,$service_engineer_id;
	public function __construct(){

	}
	public function setVin($vin){
		$this->vin=$vin;
	}
	public function setRegistrationId($registration_id){
		$this->registration_id=$registration_id;
	}
	public function setServiceDate($service_date){
		$this->service_date=$service_date;
	}
	public function setWorkstationId($workstation_id){
		$this->workstation_id=$workstation_id;
	}
	public function setServiceId($service_id){
		$this->service_id=$service_id;
	}
	public function setServiceDescription($service_description){
		$this->service_description=$service_description;
	}
	public function setServiceEngineerId($service_engineer_id){
		$this->service_engineer_id=$service_engineer_id;
	}


	public function getVin(){
		return $this->vin;
	}
	public function getRegistrationId(){
		return $this->registration_id;
	}
	public function getServiceDate(){
		return $this->service_date;
	}
	public function getWorkstationId(){
		return $this->workstation_id;
	}
	public function getServiceID(){
		return $this->service_id;
	}
	public function getServiceDescription(){
		return $this->service_description;
	}
	public function getServiceEngineerId(){
		return $this->service_engineer_id;
	}
}
?>