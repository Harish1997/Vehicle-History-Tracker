<?php
namespace App\Delegates;
use App\Dao\VehicleModelDao;
class VehicleModelDelegate{
	public $model_dao;
	public function __construct(){
		$this->model_dao=new VehicleModelDao();
	}
	public function Model($model){
		$this->model_dao->register($model);
		$result=$this->model_dao->insert_model();
		return $result;
	}
}
?>