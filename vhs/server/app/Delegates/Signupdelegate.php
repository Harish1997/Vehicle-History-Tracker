<?php
namespace App\Delegates;
use App\Dao\SignupDao;
class Signupdelegate{
	public $signupdao;
	public function __construct(){
		$this->signupdao=new SignupDao();
	}
	public function signup($user){
		$this->signupdao->register($user);
		$result=$this->signupdao->insert_authority();
		return $result;
	}

}
?>