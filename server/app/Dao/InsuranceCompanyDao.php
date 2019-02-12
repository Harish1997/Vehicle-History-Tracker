<?php
namespace App\Dao;

use App\Models\InsuranceComp;

use App\Utils\UtilInsuranceComp;

class InsuranceCompanyDao{
	public $insurance_company;
	public $util_insurance_company;
	public function __construct(){
		$this->insurance_company=new InsuranceComp();
		$this->util_insurance_company=new UtilInsuranceComp();
	}

	public function register($company){
		$this->insurance_company->setCompanyName($company["company_name"]);
		$this->insurance_company->setNaic($company["company_naic"]);
	}
	public function insert(){
		$result=$this->util_insurance_company->insert($this->insurance_company->getCompanyName(),$this->insurance_company->getNaic());
		return $result;
	}

}
?>