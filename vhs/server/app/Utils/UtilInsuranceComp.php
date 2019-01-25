<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilInsuranceComp{
	$Dbconnect conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert(){
			$sql = "insert into insurance_companies(ic_id, ic_name,naic_code) values('".$ic_id."','".$ic_name."','".$naic_code."');";
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