<?php
namespace App\Controllers;
use App\Delegates\AuthoritySignupDelegate;
class AuthoritySignupController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new AuthoritySignupdelegate();
	}
	public function addUser(){
			$result=$this->delegate_object->signup($this->request->getParsedBody());
			return $result;
	}
}
?>