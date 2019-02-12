<?php
namespace App\Controllers;
use App\Delegates\CriminalRecordDelegate;
class CriminalRecordController{
	public $request;
	public $delegate_object;
	public function __construct($request){
			$this->request=$request;
			$this->delegate_object=new CriminalRecordDelegate();
	}
	public function addCriminalRecord(){
			$result=$this->delegate_object->Crime($this->request->getParsedBody());
			return $result;
	}
}
?>