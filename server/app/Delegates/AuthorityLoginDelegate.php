<?php
namespace App\Delegates;
use App\Dao\AuthenticationDao;
class AuthorityLoginDelegate{
	public $login_dao;
	public function __construct(){
		$this->login_dao=new AuthenticationDao();
	}
	public function login($user){
		$result=$this->login_dao->authenticate($user);
		if($result==TRUE){
			return "User is authenticated";
		}
		else{
			return "Authentication Failed";
		}
	}
}
?>