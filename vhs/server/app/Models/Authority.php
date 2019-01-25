<?php
namespace App\Models;

class Authority{
	public $email,$password,$contact,$first_name,$last_name,$organization_type,$oragnization_name;
	public function __construct(){

	}
	public function setEmail($em){
		$this->email=$em;
	}
	public function setPassword($ps){
		$this->password=$ps;
	}
	public function setContact($cn){
		$this->contact=$cn;
	}
	public function setFirstName($fn){
		$this->first_name=$fn;
	}
	public function setLastName($ln){
		$this->last_name=$ln;
	}
	public function setOrganizationType($org_type){
		$this->organization_type=$org_type;
	}
	public function setOrganizationName($org_name){
		$this->organization_name=$org_name;
	}

	public function getEmail(){
			return $this->email;
	}
	public function getPassword(){
			return $this->password;
	}
	public function getContact(){
			return $this->contact;
	}
	public function getFirstName(){
			return $this->first_name;
	}
	public function getLastName(){
			return $this->last_name;
	}
	public function getOrganizationType(){
			return $this->organization_type;
	}
	public function getOrganizationName(){
			return $this->organization_name;
	}
}
?>