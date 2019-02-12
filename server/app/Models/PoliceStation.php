<?php
namespace App\Models;

class PoliceStation{
	public $station_id,$station_name,$inspector_name,$station_contact;

	public function __construct(){
	}
	public function setStationID($station_id){
		$this->station_id=$station_id;
	}
	public function setStationName($station_name){
		$this->station_name=$station_nameat;
	}
	public function setInspectorName($inspector_name){
		$this->inspector_name=$inspector_name;
	}
	public function setStationContact($station_contact){
		$this->station_contact=$station_contact;
	}

	public function getStationID(){
		return $this->station_id;
	}
	public function getStationName(){
		return $this->station_name;
	}
	public function getInspectorName(){
		return $this->inspector_name;
	}
	public function getStationContact(){
		return $this->station_contact;
	}
}
?>