<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilVehicle{
	$Dbconnect conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert_vehicle($vin,$manufacturer_id,$year_of_mfg,$model_name,$color){
			$sql = "insert into vehicle(vin, manufacturer_id,year_of_mfg,model_name,color) values('".$vin."','".$manufacturer_id."','".$year_of_mfg."','".$model_name."','".$color."');";
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