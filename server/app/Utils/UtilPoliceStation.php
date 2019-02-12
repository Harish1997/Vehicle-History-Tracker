<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilStation{
	public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($station_id,$station_name,$inspector_name,$station_contact){
			$sql = "insert into station(station_id, station_name,inspector_name,station_contact) values('".$station_id."','".$station_name."','".$inspector_name."','".$station_contact."');";
			try{
			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}catch(Exception  $e){
			$response['response']=0;
            $response['message']=$e;
            return $response;
		}
	}
}
?>