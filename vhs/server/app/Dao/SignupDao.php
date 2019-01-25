<?php
namespace App\Dao;

use App\Models\Authority;
use App\Utils\UtilAuthority;

class SignupDao{
	public $authority;
	public $utilauthority;
	public function __construct(){
		$this->authority=new Authority();
		$this->utilauthority=new UtilAuthority();
	}
	public function register($user){

		$this->authority->setEmail($user["email"]);
		$this->authority->setPassword($user["password"]);
		$this->authority->setContact($user["contact"]);
		$this->authority->setFirstName($user["first_name"]);
		$this->authority->setLastName($user["last_name"]);
		$this->authority->setOrganizationType($user["organization_type"]);
		$this->authority->setOrganizationName($user["organization_name"]);

	}
	public function insert_authority(){

		echo $this->authority->getEmail();
		$result=$this->utilauthority->insert($this->authority->getEmail(),$this->authority->getPassword(),$this->authority->getContact(),$this->authority->getFirstName(),$this->authority->getLastName(),$this->authority->getOrganizationType(),$this->authority->getOrganizationName());
		return $result;
	}

}
?>