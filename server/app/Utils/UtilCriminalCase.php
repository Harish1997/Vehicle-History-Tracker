<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilCrimCase{
	public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($case_id,$case_date,$station_id,$case_type,$case_description){
			$sql = "insert into criminal_case(case_id, case_date,station_id,case_type,case_description) values('".$case_id."','".$case_date."','".$station_id."','".$case_type."','".$case_description."');";
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