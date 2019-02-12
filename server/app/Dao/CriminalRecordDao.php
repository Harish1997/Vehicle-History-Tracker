<?php
namespace App\Dao;

use App\Models\CriminalCase;

use App\Utils\UtilCriminalCase;

class CriminalRecordDao{
	public $criminal_record;
	public $util_criminal_record;
	public function __construct(){
		$this->criminal_record=new CriminalCase();
		$this->util_criminal_record=new UtilCriminalCase();
	}

	public function register($crime){
		$this->criminal_record->setCaseId($crime["case_id"]);
		$this->criminal_record->setCaseDate($crime["case_date"]);
		$this->criminal_record->setStationId($crime["station_id"]);
		$this->criminal_record->setCaseType($crime["case_type"]);
		$this->criminal_record->setCaseDescription($crime["case_description"]);
	
	}
	public function insert(){
		$result=$this->util_criminal_record->insert($this->criminal_record->getCaseId(),$this->criminal_record->getCaseDate(),$this->criminal_record->getStationId(),$this->criminal_record->getCaseType(),$this->criminal_record->getCaseDescription());
		return $result;
	}

}
?>