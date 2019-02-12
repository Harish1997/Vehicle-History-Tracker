<?php
namespace App\Dao;

use App\Models\Manufacturer;
use App\Utils\UtilManufacturer;

class ManufacturerDao{
	public $manufacturer;
	public $util_manufacturer;
	public function __construct(){
		$this->manufacturer=new Manufacturer();
		$this->util_manufacturer=new UtilManufacturer();
	}
	public function register($manufacturer){

		$this->manufacturer->setManufacturerName($manufacturer["manufacturer_name"]);
	}
	public function insert_manufacturer(){

		echo $this->manufacturer->getManufacturerName();
		$result=$this->util_manufacturer->insert($this->manufacturer->getManufacturerName());
		return $result;
	}

}
?>