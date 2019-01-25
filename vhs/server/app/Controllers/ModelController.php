<?php
namespace App\Controllers;
use App\Delegates\Modeldelegate;
class ModelController{
	public $request;
	public $delegateobj;
	public function __construct($request){
			$this->request=$request;
			$this->delegateobj=new Modeldelegate();
	}
	public function addModel(){
			$result=$this->delegateobj->Model($this->request->getParsedBody());
			return $result;
	}
}
?>