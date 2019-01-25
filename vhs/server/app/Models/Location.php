<?php
namespace App\Models;

class Location{
	public $location_id,$country,$state,$city,$street,$number;
	public function __construct(){

	}
	public function setCountry($cn){
		$this->country=$cn;
	}
	public function setState($st){
		$this->state=$st;
	}
	public function setCity($cty){
		$this->city=$cty;
	}
	public function setStreet($strt){
		$this->street=$strt;
	}
	public function setNumber($num){
		$this->number=$num;
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