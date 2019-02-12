<?php
namespace App\Controllers;
use App\Delegates\ServiceStationDelegate;
class ServiceStationController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new ServiceStationDelegate();
	}
	public function addServiceStation(){
			$result=$this->delegate_object->ServiceStation($this->request->getParsedBody());
			return $result;
	}
}
?>