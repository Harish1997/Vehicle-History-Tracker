<?php
namespace App\Dao;

use App\Models\VehicleClaim;

use App\Utils\UtilInsuranceClaim;

class ClaimDao{
	public $insurance_claim;
	public $utilinsurancecliam;
	public function __construct(){
		$this->insurance_claim=new VehicleClaim();
		$this->utilinsuranceclaim=new UtilInsuranceClaim();
	}


	public function register($claim){
		$this->insurance_claim->setVin($claim["vin"]);
		$this->insurance_claim->setInsuranceId($claim["insurance_id"]);
		$this->insurance_claim->setClaimDate($claim["claim_date"]);
		$this->insurance_claim->setClaimType($claim["claim_type"]);
		$this->insurance_claim->setDescription($claim["description"]);
		$this->insurance_claim->setEstimatedCost($claim["estimated_cost"]);
		$this->insurance_claim->setClaimStatus($claim["claim_status"]);

	}
	public function insert(){
		$result=$this->utilinsuranceclaim->insert($this->insurance_claim->getVin(),$this->insurance_claim->getInsuranceId(),$this->insurance_claim->getClaimDate(),$this->insurance_claim->getClaimType(),$this->insurance_claim->getDescription(),$this->insurance_claim->getEstimatedCost(),$this->insurance_claim->getClaimStatus());
		return $result;
	}

}
?>