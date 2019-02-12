<?php
namespace App\Controllers;
use App\Delegates\VehicleInsuranceDelegate;
class VehicleInsuranceController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new VehicleInsuranceDelegate();
	}
	public function addVehicleInsurance(){
			$result=$this->delegate_object->Insurance($this->request->getParsedBody());
			return $result;
	}
}
?>