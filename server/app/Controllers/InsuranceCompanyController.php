<?php
namespace App\Controllers;
use App\Delegates\InsuranceCompanyDelegate;
class InsuranceCompanyController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new InsuranceCompanyDelegate();
	}
	public function addCompany(){
			$result=$this->delegate_object->Company($this->request->getParsedBody());
			return $result;
	}
}
?>