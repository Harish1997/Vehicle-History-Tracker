<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilServiceStation{
	public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($ws_id,$ws_name,$manufacturer_idm,$location_id,$manager_name,$ws_contact){
			$sql = "insert into service_station(ws_id, ws_name,manufacturer_id,location_id,manager_name,ws_contact) values('".$ws_id."','".$ws_name."','".$manufacturer_id."','".$location_id."','".$manager_name."','".$ws_contact."');";
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