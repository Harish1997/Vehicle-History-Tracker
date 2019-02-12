<?php
namespace App\Models;

class InsuranceComp{
	public $insurance_company_id,$insurance_company_name,$naic_code;
	public function __construct(){

	}
	public function setCompanyId($insurance_company_id){
		$this->insurance_company_id=$insurance_company_id;
	}
	public function setCompanyName($insurance_company_name){
		$this->insurance_company_name=$insurance_company_name;
	}
	public function setNaic($naic_code){
		$this->naic_code=$naic_code;
	}
	public function getCompanyID(){
		return $this->insurance_company_id;
	}
	public function getCompanyName(){
		return $this->insurance_company_name;
	}
	public function getNaic(){
		return $this->naic_code;
	}
}
?>