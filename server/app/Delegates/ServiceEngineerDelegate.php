<?php
namespace App\Delegates;
use App\Dao\ServiceEngineerDao;
class ServiceEngineerDelegate{
	public $service_engineer_dao;
	public function __construct(){
		$this->service_engineer_dao=new ServiceEngineerDao();
	}
	public function Engineer($engineer){
		$this->service_engineer_dao->register($engineer);
		$result=$this->service_engineer_dao->insert();
		return $result;
	}
}
?>