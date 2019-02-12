<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilRegistration{
	public $conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($registration_id,$manufacturer_id,$model_name,$color,$registration_date,$rto_id,$vin){
			$sql = "insert into registration(registration_id, manufacturer_id,model_name,color,registration_date,rto_id) values('".$registration_id."','".$manufacturer_id."','".$model_name."','".$color."','".$registration_date."','".$rto_id."','".$registration_date."');";
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