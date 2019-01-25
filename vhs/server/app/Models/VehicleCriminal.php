<?php
namespace App\Models;

class VehicleCriminal{
	public $vin,$registration_id,$case_id;

	public function __construct(){

	}
	public function setVin($vi){
		$this->vin=$vi;
	}
	public function setRegistration($s_r){
		$this->registration_id=$s_r;
	}
	public function setCaseID($c_id){
		$this->case_id=$c_id;
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