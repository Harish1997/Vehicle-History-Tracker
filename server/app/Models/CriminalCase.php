<?php
namespace App\Models;

class CriminalCase{
	public $case_id,$case_date,$station_id,$case_type,$case_description;
	public function __construct(){

	}
	public function setCaseId($case_id){
		$this->case_id=$case_id;
	}
	public function setCaseDate($case_date){
		$this->case_date=$case_date;
	}
	public function setStationId($station_id){
		$this->station_id=$station_id;
	}
	public function setCaseType($case_type){
		$this->case_type=$case_type;
	}
	public function setCaseDescription($case_description){
		$this->case_description=$case_description;
	}

	public function getCaseId(){
		return $this->case_id;
	}
	public function getCaseDate(){
		return $this->case_date;
	}
	public function getStationId(){
		return $this->station_id;
	}
	public function getCaseType(){
		return $this->case_type;
	}
	public function  getCaseDescription(){
		return $this->case_description;
	}
}
?>