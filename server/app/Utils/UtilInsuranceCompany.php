<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilInsuranceComp{
	public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($ic_name,$naic_code){
			$sql = "insert into insurance_companies(ic_name,naic_code) values('".$ic_name."','".$naic_code."');";
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