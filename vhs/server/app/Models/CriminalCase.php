<?php
namespace App\Models;

class CriminalCase{
	public $case_id,$case_date,$station_id,$case_type,$case_description;
	public function __construct(){

	}
	public function setCaseID($c_id){
		$this->case_id=$c_id;
	}
	public function setCaseDate($c_d){
		$this->case_date=$c_d;
	}
	public function setStation_ID($s_id){
		$this->station_id=$s_id;
	}
	public function setCaseType($c_t){
		$this->case_type=$c_t;
	}
	public function setCaseDescription($c_desc){
		$this->case_description=$c_desc;
	}

	public function getCaseID(){
		return $this->case_id;
	}
	public function getCaseDate(){
		return $this->case_date;
	}
	public function getStationID(){
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