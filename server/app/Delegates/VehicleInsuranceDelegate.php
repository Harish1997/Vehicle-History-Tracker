<?php
namespace App\Delegates;
use App\Dao\VehicleInsuranceDao;
class VehicleInsuranceDelegate{
	public $vehicle_insurance_dao;
	public function __construct(){
		$this->vehicle_insurance_dao=new VehicleInsuranceDao();
	}
	public function Insurance($vehicle_insurance){
		$this->vehicle_insurance_dao->register($vehicle_insurance);
		$result=$this->vehicle_insurance_dao->insert();
		return $result;
	}
}
?>