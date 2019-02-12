<?php
namespace App\Models;

class VehicleCriminal{
	public $vin,$registration_id,$case_id;

	public function __construct(){

	}
	public function setVin($vin){
		$this->vin=$vin;
	}
	public function setRegistration($registration_id){
		$this->registration_id=$registration_id;
	}
	public function setCaseID($case_id){
		$this->case_id=$case_id;
	}

	public function getVin(){
		return $this->vin;
	}
	public function getRegistration(){
		return $this->registration_id;
	}
	public function getCaseID(){
		return $this->case_id;
	}


}
?>