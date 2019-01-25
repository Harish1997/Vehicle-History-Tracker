<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilServiceEngineer{
	$Dbconnect conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($ws_id,$service_engineer_id,$contact){
			$sql = "insert into service_engineer(ws_id, service_engineer_id,contact) values('".$ws_id."','".$service_engineer_id."','".$contact."');";
			try{
			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		catch(Exception $e){
			Console.log($e);
		}
	}
}
?>