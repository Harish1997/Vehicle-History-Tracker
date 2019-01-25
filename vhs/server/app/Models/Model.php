<?php
namespace App\Models;

class Model{
	public $manufacturer_id,$model_name,$year_of_production,$displacement,$type;

	public function __construct(){

	}
	public function setManufacturerId($m_id){
		$this->manufacturer_id=$m_id;
	}
	public function setModelName($m_n){
		$this->model_name=$m_n;
	}
	public function setYearOfProduction($y_o_p){
		$this->year_of_production=$y_o_p;
	}
	public function setDisplacement($disp){
		$this->displacement=$disp;
	}
	public function setVehicleType($vt){
		$this->type=$vt;
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