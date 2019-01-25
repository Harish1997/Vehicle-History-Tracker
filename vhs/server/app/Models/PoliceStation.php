<?php
namespace App\Models;

class PoliceStation{
	public $station_id,$station_name,$inspector_name,$station_contact;

	public function __construct(){
	}
	public function setStationID($s_id){
		$this->station_id=$s_id;
	}
	public function setStationName($s_n){
		$this->station_name=$s_n;
	}
	public function setInspectorName($i_n){
		$this->inspector_name=$i_n;
	}
	public function setStationContact($s_con){
		$this->station_contact=$s_con;
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