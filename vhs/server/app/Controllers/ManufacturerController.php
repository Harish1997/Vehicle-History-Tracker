<?php
namespace App\Controllers;
use App\Delegates\Manufacturerdelegate;
class ManufacturerController{
	public $request;
	public $delegateobj;
	public function __construct($request){
			$this->request=$request;
			$this->delegateobj=new Manufacturerdelegate();
	}
	public function addManufacturer(){
			$result=$this->delegateobj->Manufacturer($this->request->getParsedBody());
			return $result;
	}
}
?>