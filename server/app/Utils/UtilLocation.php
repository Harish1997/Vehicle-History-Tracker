<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilLocation{
	public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
   function insert($location_id,$country,$state,$city,$street,$number){
			$sql = "insert into location(location_id, country,state,city,street,number) values('".$location_id."','".$country."','".$state."','".$city."','".$street."','".$number."');";
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