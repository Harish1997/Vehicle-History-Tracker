<?php
namespace App\Dao;

use App\Models\Manufacturer;
use App\Utils\UtilManufacturer;

class ManufacturerDao{
	public $manufacturer;
	public $utilmanufacturer;
	public function __construct(){
		$this->manufacturer=new Manufacturer();
		$this->utilmanufacturer=new UtilManufacturer();
	}
	public function register($manufacturer){

		$this->manufacturer->setManufacturerName($manufacturer["manufacturer_name"]);
	}
	public function insert_manufacturer(){

		echo $this->manufacturer->getManufacturerName();
		$result=$this->utilmanufacturer->insert($this->manufacturer->getManufacturerName());
		return $result;
	}

}
?>