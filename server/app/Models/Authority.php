<?php
namespace App\Models;

class Authority{
	public $email,$password,$contact,$first_name,$last_name,$organization_type,$oragnization_name;
	public function __construct(){

	}
	public function setEmail($email){
		$this->email=$email;
	}
	public function setPassword($password){
		$this->password=$password;
	}
	public function setContact($contact){
		$this->contact=$contact;
	}
	public function setFirstName($first_name){
		$this->first_name=$first_name;
	}
	public function setLastName($last_name){
		$this->last_name=$last_name;
	}
	public function setOrganizationType($organization_type){
		$this->organization_type=$organization_type;
	}
	public function setOrganizationName($organization_name){
		$this->organization_name=$organization_name;
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