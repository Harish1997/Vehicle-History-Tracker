<?php
namespace App\Delegates;
use App\Dao\ManufacturerDao;
class Manufacturerdelegate{
	public $manufacturerdao;
	public function __construct(){
		$this->manufacturerdao=new ManufacturerDao();
	}
	public function Manufacturer($manufacturer){
		$this->manufacturerdao->register($manufacturer);
		$result=$this->manufacturerdao->insert_manufacturer();
		return $result;
	}
}
?>