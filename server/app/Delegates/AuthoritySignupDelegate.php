<?php
namespace App\Delegates;
use App\Dao\AuthenticationDao;
class AuthoritySignupDelegate{
	public $signup_dao;
	public function __construct(){
		$this->signup_dao=new AuthenticationDao();
	}
	public function signup($user){
		$this->signup_dao->register($user);
		$result=$this->signup_dao->insert_authority();
		return $result;
	}
}
?>