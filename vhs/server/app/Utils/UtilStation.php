<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilStation{
	$Dbconnect conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert_police_station($station_id,$station_name,$inspector_name,$station_contact){
			$sql = "insert into station(station_id, station_name,inspector_name,station_contact) values('".$station_id."','".$station_name."','".$inspector_name."','".$station_contact."');";
			try{
			if ($this->conn->query($sql) === TRUE) {
    			echo "New record created successfully";
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}catch(Exception  $e){
			Console.log($e);
		}
	}
}
?>