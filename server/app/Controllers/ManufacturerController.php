<?php
namespace App\Controllers;

use App\Delegates\ManufacturerDelegate;

class ManufacturerController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new ManufacturerDelegate();
	}
	public function addManufacturer(){
			$result=$this->delegate_object->Manufacturer($this->request->getParsedBody());
			return $result;
	}
}
?>