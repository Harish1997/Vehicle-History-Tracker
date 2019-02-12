<?php
namespace App\Models;

class VehicleInsurance{
	public $vin,$registration_id,$ic_id,$insurance_id,$insurance_type,$insurance_validity;
	public function __construct(){

	}
	public function setVin($vin){
		$this->vin=$vin;
	}
	public function setRegistrationId($registration_id){
		$this->registration_id=$registration_id;
	}
	public function setInsuranceCompId($insurance_company_id){
		$this->insurance_company_id=$insurance_company_id;
	}
	public function setInsuranceId($insurance_id){
		$this->insurance_id=$insurance_id;
	}
	public function setInsuranceType($insurance_type){
		$this->insurance_type=$insurance_type;
	}
	public function setValidity($insurance_validity){
		$this->insurance_validity=$insurance_validity;
	}


	public function getVin(){
		return $this->vin;
	}
	public function getRegistrationId(){
		return $this->registration_id;
	}
	public function getInsuranceCompId(){
		return $this->insurance_company_id;
	}
	public function getInsuranceId(){
		return $this->insurance_id;
	}
	public function getInsuranceType(){
		return $this->insurance_type;
	}
	public function getValidity(){
		return $this->insurance_validity;
	}
}
?>