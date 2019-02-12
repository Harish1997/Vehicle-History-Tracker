<?php
namespace App\Controllers;
use App\Delegates\VehicleDelegate;
class VehicleController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new VehicleDelegate();
	}
	public function addVehicle(){
			$result=$this->delegate_object->Vehicle($this->request->getParsedBody());
			return $result;
	}
}
?>