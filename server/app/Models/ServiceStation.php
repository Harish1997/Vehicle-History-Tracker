<?php
namespace App\Models;

class ServiceStation{
	public $workstation_id,$workstation_name,$manufacturer_id,$workstation_location_id,$manager_id,$workstation_contact;
	public function  __construct(){

	}
	public function setWorkstationId($workstation_id){
		$this->workstation_id=$workstation_id;
	}
	public function setWorkstationName($workstation_name){
		$this->workstation_name=$workstation_name;
	}
	public function setManufacturerId($manufacturer_id){
		$this->manufacturer_id=$manufacturer_id;
	}
	public function setLocationId($workstation_location_id){
		$this->location_id=$location_id;
	}
	public function setManagerId($manager_id){
		$this->manager_id=$manager_id;
	}
	public function setWorkstationContact($workstation_contact){
		$this->workstation_contact=$workstation_contact;
	}

	public function getWorkstationID(){
		return $this->workstation_id;
	}
	public function getWorkstationName(){
		return $this->workstation_name;
	}
	public function getManufacturerID(){
		return $this->manufacturer_id;
	}
	public function getLocationID(){
		return $this->workstation_location_id;
	}
	public function getManagerID(){
		return $this->manager_id;
	}
	public function setWorkstationContact(){
		$this->workstation_contact;
	}
}
?>