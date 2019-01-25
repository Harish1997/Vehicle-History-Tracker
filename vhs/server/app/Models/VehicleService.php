<?php
namespace App\Models;

class VehicleService{
	public $vin,$registration_id,$service_date,$workstation_id,$service_id,$service_description,$service_engineer_id;
	public function __construct(){

	}
	public function setVin($vn){
		$this->vin=$vn;
	}
	public function setRegistrationId($r_id){
		$this->registration_id=$r_id;
	}
	public function setServiceDate($s_date){
		$this->service_date=$s_date;
	}
	public function setWorkstationId($w_id){
		$this->workstation_id=$w_id;
	}
	public function setServiceId($ser_id){
		$this->service_id=$ser_id;
	}
	public function setServiceDescription($ser_desc){
		$this->service_description=$ser_desc;
	}
	public function setServiceEngineerId($s_eng_id){
		$this->service_engineer_id=$s_eng_id;
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