<?php
namespace App\Controllers;
use App\Delegates\ServiceEngineerDelegate;
class ServiceEngineerController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new ServiceEngineerDelegate();
	}
	public function addEngineer(){
			$result=$this->delegate_object->Engineer($this->request->getParsedBody());
			return $result;
	}
}
?>