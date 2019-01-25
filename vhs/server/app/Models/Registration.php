<?php
namespace App\Models;

class Registration{
	public $registration_id,$manufacturer_id,$model_name,$color,$registration_date,$rto_id;
	public function __construct(){

	}
	public function setRegistrationID($r_id){
		$this->registration_id=$r_id;
	}
	public function setManufacturerID($m_id){
		$this->manufacturer_id=$m_id;
	}
	public function setModelName($m_n){
		$this->model_name=$m_n;
	}
	public function setColor($col){
		$this->color=$col;
	}
	public function setRegistrationDate($rgd){
		$this->registration_date=$rgd;
	}
	public function setRtoID($rt_id){
		$this->rto_id=$rt_id;
	}


	public function getRegistrationID(){
		return $this->registration_id;
	}
	public function getManufacturerID(){
		return $this->manufacturer_id;
	}
	public function getModelName(){
		return $this->model_name;
	}
	public function getColor(){
		return $this->color;
	}
	public function getRegistrationDate(){
		return $this->registration_date;
	}
	public function getRtoID(){
		return $this->rto_id;
	}

}
?>