<?php
namespace App\Models;

class VehicleModel{
	public $manufacturer_id,$model_name,$year_of_production,$displacement,$type;

	public function __construct(){

	}
	public function setManufacturerId($manufacturer_id){
		$this->manufacturer_id=$manufacturer_id;
	}
	public function setModelName($model_name){
		$this->model_name=$model_name;
	}
	public function setYearOfProduction($year_of_production){
		$this->year_of_production=$year_of_production;
	}
	public function setDisplacement($displacement){
		$this->displacement=$displacement;
	}
	public function setVehicleType($type){
		$this->type=$type;
	}

	public function getManufacturerId(){
		return $this->manufacturer_id;
	}
	public function getModelName(){
		return $this->model_name;
	}
	public function getYearOfProduction(){
		return $this->year_of_production;
	}
	public function getDisplacement(){
		return $this->displacement;
	}
	public function getVehicleType(){
		return $this->type;
	}
}
?>