<?php
namespace App\Dao;

use App\Models\ServiceEngineer;

use App\Utils\UtilServiceEngineer;

class ServiceEngineerDao{
	public $service_engineer;
	public $util_service_engineer;
	public function __construct(){
		$this->service_engineer=new ServiceEngineer();
		$this->util_service_engineer=new UtilServiceEngineer();
	}



	public function register($engineer){
		$this->service_engineer->setWorkstationId($engineer["workstation_id"]);
		$this->service_engineer->setServiceEngineerId($engineer["engineer_id"]);
		$this->service_engineer->setContact($engineer["contact"]);

	}
	public function insert(){
		$result=$this->util_service_engineer->insert($this->service_engineer->getWorkstationId(),$this->service_engineer->getServiceEngineerId(),$this->service_engineer->getContact());
		return $result;
	}
}
?>