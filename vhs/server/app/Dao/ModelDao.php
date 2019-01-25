<?php
namespace App\Dao;

use App\Models\Model;
use App\Utils\UtilModel;

class ModelDao{
	public $model;
	public $utilmodel;
	public function __construct(){
		$this->model=new Model();
		$this->utilmodel=new UtilModel();
	}
	public function register($model){

		$this->model->setManufacturerId($model["manufacturer_id"]);
		$this->model->setModelName($model["model_name"]);
		$this->model->setYearOfProduction($model["year_of_production"]);
		$this->model->setDisplacement($model["displacement"]);
		$this->model->setVehicleType($model["type"]);
	}

	public function insert_model(){
		$result=$this->utilmodel->insert($this->model->getManufacturerId(),$this->model->getModelName(),$this->model->getYearOfProduction(),$this->model->getDisplacement(),$this->model->getVehicleType());
		return $result;
	}

}
?>