<?php
namespace App\Controllers;
use App\Delegates\ServiceStationLocationDelegate;
class ServiceStationLocationController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new ServiceStationLocationDelegate();
	}
	public function addServiceStationLocation(){
			$result=$this->delegate_object->ServiceStationLocation($this->request->getParsedBody());
			return $result;
	}
}
?>