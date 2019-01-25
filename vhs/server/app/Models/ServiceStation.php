<?php
namespace App\Models;


class ServiceStation{
	public $ws_id,$ws_name,$manufacturer_id,$location_id,$manager_id,$ws_contact;
	public function  __construct(){

	}
	public function setWorkstationID($w_id){
		$this->ws_id=$w_id;
	}
	public function setWorkstationName($w_name){
		$this->ws_name=$w_name;
	}
	public function setManufacturerID($m_id){
		$this->manufacturer_id=$m_id;
	}
	public function setLocationID($l_id){
		$this->location_id=$l_id;
	}
	public function setManagerID($man_id){
		$this->manager_id=$man_id;
	}
	public function setWorkstationContact($ws_con){
		$this->ws_contact=$ws_con;
	}

	public function getWorkstationID(){
		return $this->ws_id;
	}
	public function getWorkstationName(){
		return $this->ws_name;
	}
	public function getManufacturerID(){
		return $this->manufacturer_id;
	}
	public function getLocationID(){
		return $this->location_id;
	}
	public function getManagerID(){
		return $this->manager_id;
	}
	public function setWorkstationContact(){
		$this->ws_contact;
	}
}
?>