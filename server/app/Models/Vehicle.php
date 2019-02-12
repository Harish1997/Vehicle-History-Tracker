<?php
namespace App\Models;


class Vehicle{
	public $vin,$manufacturer_id,$year_of_mfg,$model_name,$color;
	function __construct(){
		
	}
	public function setVin($vin){
				$this->vin=$vin;
	}
	public function setManufacturerId($manufacturer_id){
				$this->manufacturer_id=$manufacturer_id;
	}

	public function setYear($year_of_mfg){
				$this->year_of_mfg=$year_of_mfg;

	}
	public function setModel($model_name){
				$this->model_name=$model_name;
	}
	public function setColor($color){
				$this->color=$color;
	}

	public function getVin(){
		return $this->vin;
	}
	public function getManufacturerId(){
		return $this->manufacturer_id;
	}
	public function getYear(){
		return $this->year_of_mfg;
	}
	public function getModel(){
		return $this->model_name;
	}
	public function getColor(){
		return $this->color;
	}
}
?>