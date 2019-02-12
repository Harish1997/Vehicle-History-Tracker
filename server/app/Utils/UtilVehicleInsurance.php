<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilVehicleInsurance{
	public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($vin,$registration_id,$ic_id,$insurance_id,$insurance_type,$validity){
			$sql = "insert into vehicle_insurance(vin, registration_id,ic_id,insurance_id,insurance_type,validity) values('".$vin."','".$registration_id."','".$ic_id."','".$insurance_id."','".$insurance_type."','".$validity."');";
			try{
			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}catch(Exception $e){
			$response['response']=0;
            $response['message']=$e;
            return $response;
		}
	}
}
?>