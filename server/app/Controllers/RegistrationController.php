<?php
namespace App\Controllers;
use App\Delegates\RegistrationDelegate;
class RegistrationController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new RegistrationDelegate();
	}
	public function addRegistration(){
			$result=$this->delegate_object->Registration($this->request->getParsedBody());
			return $result;
	}
}
?>