<?php
namespace App\Dao;

use App\Models\VehicleModel;
use App\Utils\UtilVehicleModel;

class VehicleModelDao{
	public $model;
	public $util_model;
	public function __construct(){
		$this->model=new VehicleModel();
		$this->util_model=new UtilVehicleModel();
	}
	public function register($model){

		$this->model->setManufacturerId($model["manufacturer_id"]);
		$this->model->setModelName($model["model_name"]);
		$this->model->setYearOfProduction($model["year_of_production"]);
		$this->model->setDisplacement($model["displacement"]);
		$this->model->setVehicleType($model["type"]);
	}

	public function insert_model(){
		$result=$this->util_model->insert($this->model->getManufacturerId(),$this->model->getModelName(),$this->model->getYearOfProduction(),$this->model->getDisplacement(),$this->model->getVehicleType());
		return $result;
	}

}
?>