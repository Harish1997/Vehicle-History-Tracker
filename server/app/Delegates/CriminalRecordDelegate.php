<?php
namespace App\Delegates;
use App\Dao\CriminalRecordDao;
class CriminalRecordDelegate{
	public $criminal_record_dao;
	public function __construct(){
		$this->criminal_record_dao=new CriminalRecordDao();
	}
	public function Crime($crime){
		$this->criminal_record_dao->register($crime);
		$result=$this->criminal_record_dao->insert();
		return $result;
	}
}
?>