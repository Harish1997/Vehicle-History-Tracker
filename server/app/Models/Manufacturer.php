<?php
namespace App\Models;

class Manufacturer{
	public $manufacturer_id,$manufacturer_name;

	public function __construct(){

	}
	public function setManufacturerID($manufacturer_id){
		$this->manufacturer_id=$manufacturer_id;
	}
	public function setManufacturerName($manufacturer_name){
		$this->manufacturer_name=$manufacturer_name;
	}

	public function getManufacturerID(){
			return $this->manufacturer_id;
	}

	public function getManufacturerName(){
			return $this->manufacturer_name;
	}
}
?>