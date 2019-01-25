<?php
namespace App\Delegates;
use App\Dao\ModelDao;
class Modeldelegate{
	public $modeldao;
	public function __construct(){
		$this->modeldao=new ModelDao();
	}
	public function Model($model){
		$this->modeldao->register($model);
		$result=$this->modeldao->insert_model();
		return $result;
	}
}
?>