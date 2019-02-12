<?php
namespace App\Controllers;
use App\Delegates\VehicleModelDelegate;
class VehicleModelController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new VehicleModelDelegate();
	}
	public function addModel(){
			$result=$this->delegate_object->Model($this->request->getParsedBody());
			return $result;
	}
}
?>