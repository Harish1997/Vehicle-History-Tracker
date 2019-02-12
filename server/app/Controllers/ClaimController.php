<?php
namespace App\Controllers;
use App\Delegates\ClaimDelegate;
class ClaimController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new ClaimDelegate();
	}
	public function addClaim(){
			$result=$this->delegate_object->Claim($this->request->getParsedBody());
			return $result;
	}
}
?>