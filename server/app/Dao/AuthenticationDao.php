<?php
namespace App\Dao;

use App\Models\Authority;
use App\Utils\UtilAuthority;

class AuthenticationDao{
	public $authority;
	public $util_authority;
	public function __construct(){
		$this->authority=new Authority();
		$this->util_authority=new UtilAuthority();
	}
	public function register($user){

		$this->authority->setEmail($user["email"]);
		$this->authority->setPassword(\password_hash($user["password"],PASSWORD_BCRYPT));
		$this->authority->setContact($user["contact"]);
		$this->authority->setFirstName($user["first_name"]);
		$this->authority->setLastName($user["last_name"]);
		$this->authority->setOrganizationType($user["organization_type"]);
		$this->authority->setOrganizationName($user["organization_name"]);

	}
	public function insert_authority(){

		$result=$this->util_authority->insert($this->authority->getEmail(),$this->authority->getPassword(),$this->authority->getContact(),$this->authority->getFirstName(),$this->authority->getLastName(),$this->authority->getOrganizationType(),$this->authority->getOrganizationName());
		return $result;
	}

	public function authenticate($user){
		$this->authority->setEmail($user["email"]);

		$password=$this->util_authority->select($this->authority->getEmail());
		if(array_key_exists('response', $password)){
			return FALSE;
		}
		else{
			return (\password_verify($user["password"],$password["password"]));
		}
	}

}
?>