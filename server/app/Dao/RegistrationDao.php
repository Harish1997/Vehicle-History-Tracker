<?php
namespace App\Dao;

use App\Models\Registration;
use App\Utils\UtilReg;

class RegistrationDao{
	public $registration;
	public $util_registration;
	public function __construct(){
		$this->registration=new Registration();
		$this->util_registration=new UtilReg();
	}


	public function validate($vehicle){

		$this->registration->setRegistrationId($vehicle["registration_id"]);
		$this->registration->setManufacturerId($vehicle["manufacturer_id"]);
		$this->registration->setModelName($vehicle["model_name"]);
		$this->registration->setColor($vehicle["color"]);
		$this->registration->setRegistrationDate($vehicle["registration_date"]);
		$this->registration->setRtoId($vehicle["rto_id"]);
		$this->registration->setVin($vehicle["vin"]);

	}
	public function insert(){
		$result=$this->util_registration->insert($this->registration->getRegistrationId(),$this->registration->getManufacturerId(),$this->registration->getModelName(),$this->registration->getColor(),$this->registration->getRegistrationDate(),$this->registration->getRtoId(),$this->getVin());
		return $result;
	}

}
?>