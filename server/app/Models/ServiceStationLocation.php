<?php
namespace App\Models;

class ServiceStationLocation{
	public $location_id,$country,$state,$city,$street,$number;
	public function __construct(){

	}
	public function setCountry($country){
		$this->country=$country;
	}
	public function setState($state){
		$this->state=$state;
	}
	public function setCity($city){
		$this->city=$city;
	}
	public function setStreet($street){
		$this->street=$street;
	}
	public function setNumber($number){
		$this->number=$number;
	}

	public function getCountry(){
			return $this->country;
	}
	public function getState(){
			return $this->state;
	}
	public function getCity(){
			return $this->city;
	}
	public function getStreet(){
			return $this->street;
	}
	public function getNumber(){
			return $this->number;
	}
}
?>