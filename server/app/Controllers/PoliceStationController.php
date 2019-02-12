<?php
namespace App\Controllers;
use App\Delegates\PoliceStationDelegate;
class PoliceStationController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new PoliceStationDelegate();
	}
	public function addStation(){
			$result=$this->delegate_object->policeStation($this->request->getParsedBody());
			return $result;
	}
}
?>