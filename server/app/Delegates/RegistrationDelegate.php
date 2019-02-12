<?php
namespace App\Delegates;
use App\Dao\RegistrationDao;
class RegistrationDelegate{
	public $registration_dao;
	public function __construct(){
		$this->registration_dao=new RegistrationDao();
	}
	public function Registration($registration){
		$this->registration_dao->validate($registration);
		$result=$this->registration_dao->insert();
		return $result;
	}
}
?>