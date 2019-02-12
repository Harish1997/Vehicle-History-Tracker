<?php
namespace App\Delegates;
use App\Dao\VehicleDao;
class VehicleDelegate{
	public $vehicle_dao;
	public function __construct(){
		$this->vehicle_dao=new VehicleDao();
	}
	public function Vehicle($vehicle){
		$this->vehicle_dao->register($vehicle);
		$result=$this->vehicle_dao->insert();
		return $result;
	}
}
?>