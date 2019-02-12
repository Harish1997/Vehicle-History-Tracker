<?php
namespace App\Controllers;
use App\Delegates\AuthorityLoginDelegate;
class AuthorityLoginController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new AuthorityLogindelegate();
	}
	public function userLogin(){
			$result=$this->delegate_object->login($this->request->getParsedBody());
			return $result;
	}
}
?>