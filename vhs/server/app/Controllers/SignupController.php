<?php
namespace App\Controllers;
use App\Delegates\Signupdelegate;
class SignupController{
	public $request;
	public $delegateobj;
	public function __construct($request){
			$this->request=$request;
			$this->delegateobj=new Signupdelegate();
	}
	public function addUser(){
			//$this->request->getParsedBody();
			//echo (var_dump($this->request));
			$result=$this->delegateobj->signup($this->request->getParsedBody());
			return $result;
	}
}
?>