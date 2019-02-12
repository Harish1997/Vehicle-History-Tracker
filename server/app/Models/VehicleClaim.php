<?php
namespace App\Models;

class VehicleClaim{
	public $vin,$insurance_id,$claim_date,$claim_type,$description,$estimated_cost,$claim_status;
	public function __construct(){

	}
	public function setVin($vin){
		$this->vin=$vin;
	}
	public function setInsuranceId($insurance_id){
		$this->insurance_id=$insurance_id;
	}
	public function setClaimDate($claim_date){
		$this->claim_date=$claim_date;
	}
	public function setClaimType($claim_type){
		$this->claim_type=$claim_type;
	}
	public function setDescription($description){
		$this->description=$description;
	}
	public function setEstimatedCost($estimated_cost){
		$this->estimated_cost=$estimated_cost;
	}
	public function setClaimStatus($claim_status){
		$this->claim_status=$claim_status;
	}


	public function getVin(){
		return $this->vin;
	}
	public function getInsuranceId(){
		return $this->insurance_id;
	}
	public function getClaimDate(){
		return $this->claim_date;
	}
	public function getClaimType(){
		return $this->claim_type;
	}
	public function getDescription(){
		return $this->description;
	}
	public function getEstimatedCost(){
		return $this->estimated_cost;
	}
	public function getClaimStatus(){
		return $this->claim_status;
	}
	
}
?>