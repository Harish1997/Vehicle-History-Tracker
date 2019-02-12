<?php
namespace App\Delegates;
use App\Dao\ClaimDao;
class ClaimDelegate{
	public $claim_dao;
	public function __construct(){
		$this->claim_dao=new ClaimDao();
	}
	public function Claim($claim){
		$this->claim_dao->register($claim);
		$result=$this->claim_dao->insert();
		return $result;
	}
}
?>