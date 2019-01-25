<?php
namespace App\Models;

class VehicleInsurance{
	public $vin,$registration_id,$ic_id,$insurance_id,$insurance_type,$validity;
	public function __construct(){

	}
	public function setVin($vn){
		$this->vin=$vn;
	}
	public function setRegistrationID($r_id){
		$this->registration_id=$r_id;
	}
	public function setInsuranceCompID($icid){
		$this->ic_id=$icid;
	}
	public function setInsuranceID($iid){
		$this->insurance_id=$iid;
	}
	public function setInsuranceType($type){
		$this->insurance_type=$type;
	}
	public function setValidity($vald){
		$this->validity=$vald;
	}


	public function getVin(){
		return $this->vin;
	}
	public function getRegistrationID(){
		return $this->registration_id;
	}
	public function getInsuranceCompID(){
		return $this->ic_id;
	}
	public function getInsuranceID(){
		return $this->insurance_id;
	}
	public function getInsuranceType(){
		return $this->insurance_type;
	}
	public function getValidity(){
		return $this->validity;
	}
}
?>