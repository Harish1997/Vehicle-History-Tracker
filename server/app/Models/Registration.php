<?php
namespace App\Models;

class Registration{
	public $registration_id,$manufacturer_id,$model_name,$color,$registration_date,$rto_id,$vin;
	public function __construct(){

	}
	public function setRegistrationId($registration_id){
		$this->registration_id=$registration_id;
	}
	public function setManufacturerId($manufacturer_id){
		$this->manufacturer_id=$manufacturer_id;
	}
	public function setModelName($model_name){
		$this->model_name=$model_name;
	}
	public function setColor($color){
		$this->color=$color;
	}
	public function setRegistrationDate($registration_date){
		$this->registration_date=$registration_date;
	}
	public function setRtoId($rto_id){
		$this->rto_id=$rto_id;
	}
	public function setVin($vin){
		$this->vin=$vin;
	}

	public function getRegistrationId(){
		return $this->registration_id;
	}
	public function getManufacturerId(){
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
	public function getRtoId(){
		return $this->rto_id;
	}

}
?>