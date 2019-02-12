<?php
namespace App\Dao;

use App\Models\VehicleInsurance;

use App\Utils\UtilVehicleInsurance;

class VehicleInsuranceDao{
	public $vehicle_insurance;
	public $util_vehicle_insurance;

	public function __construct(){
		$this->vehicle_insurance=new VehicleInsurance();
		$this->util_vehicle_insurance=new UtilVehicleInsurance();
	}


	public function register($vehicle_insurance){
		$this->vehicle_insurance->setVin($vehicle_insurance["vin"]);
		$this->vehicle_insurance->setRegistrationId($vehicle_insurance["registration_id"]);
		$this->vehicle_insurance->setInsuranceCompId($vehicle_insurance["insurance_company_id"]);
		$this->vehicle_insurance->setInsuranceId($vehicle_insurance["insurance_id"]);
		$this->vehicle_insurance->setInsuranceType($vehicle_insurance["insurance_type"]);
		$this->vehicle_insurance->setValidity($vehicle_insurance["validity"]);
	}


	public function insert(){
		$result=$this->util_vehicle_insurance->insert($this->vehicle_insurance->getVin(),$this->vehicle_insurance->getRegistrationId(),$this->vehicle_insurance->getInsuranceCompId(),$this->vehicle_insurance->getInsuranceId(),$this->vehicle_insurance->getInsuranceType(),$this->vehicle_insurance->getValidity());
		return $result;
	}

}
?>