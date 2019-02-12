<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilVehicleServiceHistory{
	public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($vin,$registration_id,$manufacturer_id,$service_date,$workstation_id,$service_id,$service_description,$service_engineer_id){
			$sql = "insert into vehicle_service(vin, registration_id,service_date,ws_id,service_id,service_description,service_engineer_id) values('".$vin."','".$registration_id."','".$manufacturer_id."','".$service_date."','".$workstation_id."','".$service_id."','".$service_description."','".$service_engineer_id."');";
			try{
			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}}
			catch(Exception $e){
				$response['response']=0;
            $response['message']=$e;
            return $response;
			}
	}
}
?>