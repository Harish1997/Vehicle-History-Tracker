<?php
namespace App\Models;

class VehicleClaim{
	public $vin,$insurance_id,$claim_date,$claim_type,$description,$estimated_cost,$claim_status;
	public function __construct(){

	}
	public function setVin($vn){
		$this->vin=$vn;
	}
	public function setInsuranceID($ins_id){
		$this->insurance_id=$ins_id;
	}
	public function setClaimDate($cl_date){
		$this->claim_date=$cl_date;
	}
	public function setClaimType($cl_type){
		$this->claim_type=$cl_type;
	}
	public function setDescription($desc){
		$this->description=$desc;
	}
	public function setEstimatedCost($es_cost){
		$this->estimated_cost=$es_cost;
	}
	public function setClaimStatus($cl_stat){
		$this->claim_status$cl_stat;
	}


	public function getVin(){
		return $this->vin;
	}
	public function getInsuranceID(){
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