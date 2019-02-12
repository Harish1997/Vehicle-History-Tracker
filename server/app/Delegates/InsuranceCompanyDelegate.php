<?php
namespace App\Delegates;
use App\Dao\InsuranceCompanyDao;
class InsuranceCompanyDelegate{
	public $insurance_company_dao;
	public function __construct(){
		$this->insurance_company_dao=new InsuranceCompanyDao();
	}
	public function Company($company){
		$this->insurance_company_dao->register($company);
		$result=$this->insurance_company_dao->insert();
		return $result;
	}
}
?>