<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilInsuranceClaim{
	$Dbconnect conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($vin,$insurance_id,$claim_date,$claim_type,$description,$estimated_cost,$claim_status){
			$sql = "insert into vehicle_claim(vin, insurance_id,claim_date,claim_type,description,estimated_cost,claim_status) values('".$vin."','".$insurance_id."','".$claim_date."','".$claim_type."','".$description."','".$estimated_cost."','".$claim_status."');";
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