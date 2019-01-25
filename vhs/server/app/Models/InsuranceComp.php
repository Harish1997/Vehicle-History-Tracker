<?php
namespace App\Models;


class InsuranceComp{
	$InsuranceComp_id,$InsuranceComp_name,$Naic_code;
	public function __construct(){

	}
	public function setCompanyID($ic_id){
		$this->InsuranceComp_id=$ic_id;
	}
	public function setCompanyName($ic_name){
		$this->InsuranceComp_name=$ic_name;
	}
	public function setNaic($naic_code){
		$this->Naic_code=$naic_code;
	}
	public function getCompanyID(){
		return $this->InsuranceComp_id;
	}
	public function getCompanyName(){
		return $this->InsuranceComp_name;
	}
	public function getNaic(){
		return $this->Naic_code;
	}
}
?>