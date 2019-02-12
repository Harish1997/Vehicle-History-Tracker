<?php
namespace App\Controllers;
use App\Delegates\VehicleServiceHistoryDelegate;
class VehicleServiceHistoryController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new VehicleServiceHistoryDelegate();
	}
	public function addVehicleServiceHistory(){
			$result=$this->delegate_object->VehicleServiceHistory($this->request->getParsedBody());
			return $result;
	}
}
?>
