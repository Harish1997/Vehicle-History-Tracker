<?php
namespace App\Utils;
use App\Api\Dbconnect;

class UtilReg{
	$Dbconnect conn;

	function __construct(){
			$this->conn=new Dbconnect();

	}
	function insert($registration_id,$manufacturer_id,$model_name,$color,$registration_date,$rto_id){
			$sql = "insert into registration(registration_id, manufacturer_id,model_name,color,registration_date,rto_id) values('".$registration_id."','".$manufacturer_id."','".$model_name."','".$color."','".$registration_date."','".$rto_id."');";
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