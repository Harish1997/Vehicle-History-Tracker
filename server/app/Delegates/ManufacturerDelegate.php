<?php
namespace App\Delegates;
use App\Dao\ManufacturerDao;
class ManufacturerDelegate{
	public $manufacturer_dao;
	public function __construct(){
		$this->manufacturer_dao=new ManufacturerDao();
	}
	public function Manufacturer($manufacturer){
		$this->manufacturer_dao->register($manufacturer);
		$result=$this->manufacturer_dao->insert_manufacturer();
		return $result;
	}
}
?>