<?php
namespace App\Models;


class Vehicle{
	public $vin,$manufacturer_id,$year_of_mfg,$model_name,$color;
	function __construct(){
		
	}
	public function setVin($v,$m_id,$y_o_m,$m_n,$c){
				$this->vin=$v;
	}
	public function setManufacturer($m_id){
				$this->manufacturer_id=$m_id;
	}

	public function setYear($y_o_m){
				$this->year_of_mfg=$y_o_m;

	}
	public function setModel($m_n){
				$this->model_name=$m_n;
	}
	public function setColor($c){
				$this->color=$c;
	}

	public function getVin(){
		return $this->vin;
	}
	public function getManufacturer(){
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