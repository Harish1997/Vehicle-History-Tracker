<?php
namespace App\Models;

class Manufacturer{
	public $manufacturer_id,$manufacturer_name;

	public function __construct(){

	}
	public function setManufacturerID($m_id){
		$this->manufacturer_id=$m_id;
	}
	public function setManufacturerName($m_name){
		$this->manufacturer_name=$m_name;
	}

	public function getManufacturerID(){
			return $this->manufacturer_id;
	}

	public function getManufacturerName(){
			return $this->manufacturer_name;
	}
}
?>