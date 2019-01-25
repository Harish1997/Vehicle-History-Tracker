<?php
namespace App\Models;

class ServiceEngineer{
	public $ws_id,$service_engineer_id,$contact;

	public function __construct(){

	}
	public function setWorkstationId($ws){
		$this->ws_id=$ws;
	}
	public function setServiceEngineer($s_e_id){
		$this->service_engineer_id=$s_e_id;
	}
	public function setContact($s_con){
		$this->contact=$s_con;
	}

	public function setWorkstationId(){
			return $this->ws_id;
	}
	public function setServiceEngineer(){
			return $this->service_engineer_id;
	}
	public function setContact(){
			return $this->contact;
	}
}
?>