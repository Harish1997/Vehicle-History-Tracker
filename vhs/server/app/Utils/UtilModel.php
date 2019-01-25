<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilModel{
	 public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($m_id,$m_name,$y_o_p,$disp,$type){
		$sql = "insert into model(manufacturer_id, model_name,year_of_production,displacement,type) values('".$m_id."','".$m_name."','".$y_o_p."','".$disp."','".$type."');";

			try{
			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}catch(Exception $e){
			Console.log($e);
		}
	}
}
?>